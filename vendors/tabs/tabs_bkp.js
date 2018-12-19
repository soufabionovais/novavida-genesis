function habilitaTabs(){
	$("[data-tabs-group]").find(".tab").on("click", "a", function(e){
		e.preventDefault();
		var targetTabContent = $(this).attr("href");
		var tabsGroup = $(this).parents("[data-tabs-group]").data("tabs-group");
		$("[data-tabs-group="+tabsGroup+"]").find(".tab.active").removeClass("active");
		$(this).parents(".tab").addClass("active");
		$("[data-tabs-target-group="+tabsGroup+"]").find(".tab-content.active").removeClass("active");
		$("[data-tabs-target-group="+tabsGroup+"]").find(targetTabContent).addClass("active");

		$(".resultados-buscador").attr("hidden", true);	
	});
}