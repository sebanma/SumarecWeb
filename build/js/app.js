function turn_carrusel(){x=0,$(".campos").on("mouseenter",(function(){for(var o=1;o<5;o++)setTimeout("carrusel_timer("+o+")",x),x+=1500})),$(".menu").click((function(){$(".menu-hide").is(":visible")?$(".menu-hide").hide():$(".menu-hide").show()}))}function carrusel_cards(){$(".icon-card").on("mouseenter",(function(){addHover($(this).attr("id"))})),$(".icon-card").on("mouseleave",(function(){$(this).attr("id");removeHover()})),$(".servicios-card").on("mouseenter",(function(){addHover($(this).attr("id"))})),$(".servicios-card").on("mouseleave",(function(){$(this).attr("id");removeHover()}))}function addHover(o){$("#"+o).addClass("hover-icon")}function removeHover(){$(".icon-card").removeClass("hover-icon"),$(".servicios-card").removeClass("hover-icon")}function carrusel_timer(o){1==o||2==o||3==o?(removeHover(),addHover(o)):4==o&&(removeHover(),addHover(o),setTimeout("removeHover()",1490))}function modal(){$(".servicios-card").on("dblclick",(function(){openModal($(this).attr("id")),$(".modal-content").css({opacity:"1"})})),$(".modal-open").on("click",(function(){openModal($(this).parent().parent().attr("id")),$(".modal-content").css({opacity:"1"})})),$(".modal-close").on("click",(function(){$(".servicios-card").attr("id");$(".modal-content").css({opacity:"0"}),closeModal()}))}function openModal(o){let e=$("#"+o+" h4").text(),t=$("#"+o+" p").text(),n=$("#"+o+" .servicios-svg svg").html();$("html, body").css({overflow:"hidden",margin:"0px",height:"100%"}),$(".modal").show(),$(".modal-content h2").text(e),$(".modal-content svg").html(n),$(".modal-content p").text(t),$(".modal-content .modal-avif").attr("srcset","build/img/servicios/"+o+".avif"),$(".modal-content .modal-webp").attr("srcset","build/img/servicios/"+o+".webp"),$(".modal-content .modal-png").attr({src:"build/img/servicios/"+o+".png",alt:e})}function closeModal(){$("html, body").css({overflow:"auto"}),$(".modal").hide()}jQuery((function(){carrusel_cards(),turn_carrusel(),modal()}));
//# sourceMappingURL=app.js.map