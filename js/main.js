// Typed
$(function(){
  $(".typed").typed({
    strings: ["Em busca de um profissional comprometido?",
    "Um profissional que procura aprimorar-se diariamente.",
    "Alguém que possui habilidades que vão além da sua área.",
    "Então você está no lugar certo.",
    "Seja bem vindo!"],
    typeSpeed: 30,
  });
 });

// Tooltip
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Parallax
$(function(){
	$.stellar({
		horizontalScrolling: false,
		verticalOffset: 40
	});
});

// Reveal animations
new WOW().init();

// Portfólio filter
function filtro (numFilter) {
  if (numFilter!=0) {
  $( ".hoverzoom" ).css(
    "display", "none"
  );
  $("."+numFilter).css(
    "display", "inline-block"
  );
  } else {
  $( ".hoverzoom" ).css(
    "display", "inline-block"
  );
  }
}
