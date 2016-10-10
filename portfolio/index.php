<?php 
	$page = "portfolio";
    $page_title = "Portfolio";
    if ($_SERVER['SERVER_NAME'] === 'localhost') {
        require_once("../../config.php");    
    } else {
        require_once("../config.php");
    }
	include ROOT . '_inc/header.php';
?>
<div class="projects-wrapper">
</div>
<script>
function main(){

	var getProjects, modals;


    getProjects = function(){
		$.getJSON("../data/projects.json", function(data){
			var html = "";
			$.each(data, function(i,p){
				html += "<div class='project'>";
				html += "<div class='project--img animated' style='background-image: url(" + p.project_image  + ");'></div>";
                html += "<div class='see-more'>";
                html += "<a href='' data-target='#" + p.project_id + "' class='read-more btn btn--blue'>Details</a>";
                html += "<a target='_blank' href='" + p.project_url + "' class='btn btn--blue'>Visit</a>";
                html += "</div>";
                html += "<div class='project-modal' id='" + p.project_id + "'>";
                html += "<div class='project-modal--body'>";
                html += "<a href class='project-modal--close' data-dismiss='#" + p.project_id + "'> <span class='flaticon-close'></span> </a>"; 
                html += "<h1 class='project--title'>" + p.project_title + "</h1>";
                html += "<div class='project-modal--snapshot' style='background-image: url(" + p.project_image  + ");'></div>";
                html += "<div class='project--info'>";
                html += "<span class='wrp wrp--gray'>" + p.project_work_as + "</span>";
                html += "<span class='wrp wrp--blue'>" + p.project_type + "</span>";
                html += "<p>" + p.project_description + "</p>";
                html += "<ul class='project--features'>";

                for (var i in p.project_features){
                    html += "<li>" + p.project_features[i] + "</li>";
                }

                html += "</ul>";
                html += "<ul class='list-inline'>";

                for (var i in p.project_technologies){
                    html += "<li><span class='wrp wrp--red'>" + p.project_technologies[i] + "</span></li>";
                }

                html += "</ul>";
                html += "<a target='_blank' href='" + p.project_url + "' class='btn btn--blue'>Visit Website <span class='flaticon-outgoing'></span></a>";
                html += "</div>";
                html += "</div>";
                html += "</div>";
                html += "</div>";
			});

			$('.projects-wrapper').append(html);

		});

	} // @getPprojects function

	modals = function(){
		function zIndexFix(param){
			if (param === "remove"){
				$('#main-nav, #menu-toggle, #up-top').css('z-index','0');
			}else if(param === "reset"){
				$('#main-nav, #menu-toggle, #up-top').css('z-index','initial');	
			}
		}

		$(document).on('click', '.read-more', function(event){
			event.preventDefault();
			var target = $(this).attr('data-target');
			zIndexFix('remove');
			$( target ).fadeIn(500);
			console.log(target);
			console.log("test..");
		});
		$(document).on('click','.project-modal--close', function(event){
			event.preventDefault();
			var dismiss_modal = $(this).attr('data-dismiss');
			zIndexFix('reset');
			$( dismiss_modal ).fadeOut(300);
			console.log(dismiss_modal);
			console.log(event.type);
		});
		$(document).on('click','.project-modal--body', function(event){
			event.stopPropagation();
		});
		$(document).on('click','.project-modal', function(event){
			zIndexFix('reset');
			$(this).fadeOut(300);
			console.log("test..");
		});
	} // @modals function


	// function calls
	getProjects();
	modals();

} //

$(document).ready(main);


</script>



<?php include ROOT . '_inc/footer.php' ?>