function changeContent(file){
	var articles = document.getElementById('articles');

	$(articles).load(file);
}
