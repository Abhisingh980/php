const generalBtn = document.getElementById('general');
const businessBtn = document.getElementById('business');
const sportsBtn = document.getElementById('sports');
const technologyBtn = document.getElementById('technology');
const entertanmentBtn = document.getElementById('entertanment');
const searchBtn = document.getElementById('search');

const newsQuery = document.getElementById('newsquery');
const newsType = document.getElementById('newsType');
const newsdetails = document.getElementById('newsdetails');

$API_KEY ="86a80f8923b5436d836ba3ae2cf87825";
const HEADLINE_NEWS ="https://newsapi.org/v2/top-headlines?country=in&apiKey=";
const GENERAL_NEWS = "https://newsapi.org/v2/top-headlines?country=in&category=general&apiKey=";
const BUSINESS_NEWS ="https://newsapi.org/v2/top-headlines?country=in&category=business&apiKey=";
const SPORTS_NEWS ="https://newsapi.org/v2/top-headlines?country=in&category=sports&apiKey=";
const TECHNOLOGY_NEWS ="https://newsapi.org/v2/top-headlines?country=in&category=technology&apiKey=";
const ENTERTANMENT_NEWS ="https://newsapi.org/v2/top-headlines?country=in&category=entertainment&apiKey=";
const SEARCH_NEWS ="https://newsapi.org/v2/everything?q=";
//

// articles: Array(20)

window.onload =function(){
    newsType.innerHTML="<h3>Top Headlines</h3>";
    fetchgeneralNews();
}
//
var newsDataArr=[];

//api key

generalBtn.addEventListener("click", function(){
    newsType.innerHTML="<h3>General News</h3>";
    fetchgeneralNews();
});
businessBtn.addEventListener("click", function () {
    newsType.innerHTML="<h3>Business News</h3>";
    fetchBusinessNews();
});
sportsBtn.addEventListener("click", function () {
    newsType.innerHTML="<h3>Sports News</h3>";
    fetchSportsNews();
});
technologyBtn.addEventListener("click", function () {
    newsType.innerHTML="<h3>Technology News</h3>";
    fetchTechnologyNews();
});
entertanmentBtn.addEventListener("click", function () {
    newsType.innerHTML="<h3>Entertanment News</h3>";
    fetchEntertanmentNews();
});
searchBtn.addEventListener("click", function () {
    newsType.innerHTML="<h3>Search: "+newsQuery.value+"</h3>";
    fetchQueryNews();
});
const fetchheadlineNews = async () => {
    const response = await fetch(HEADLINE_NEWS + $API_KEY);
    newsDataArr=[];
    if(response.status>=200 && response.status<300){
        const myJason = await response.json();
        console.log(myJason);
        newsDataArr = myJason.articles;
    }else{
        console.log("error");
    }
    displayNews();
}

const fetchgeneralNews = async () => {
    const response = await fetch(GENERAL_NEWS + $API_KEY);
    newsDataArr=[];
    if(response.status>=200 && response.status<300){
        const myJason = await response.json();
        console.log(myJason);
        newsDataArr = myJason.articles;
    }else{
        console.log("error");
    }
    displayNews();
}
const fetchBusinessNews = async () => {
    const response = await fetch(BUSINESS_NEWS + $API_KEY);
    newsDataArr=[];
    if(response.status>=200 && response.status<300){
        const myJason = await response.json();
        console.log(myJason);
        newsDataArr = myJason.articles;
    }else{
        console.log(response.status, response.statusText);
    }
    displayNews();
}
const fetchSportsNews = async () => {
    const response = await fetch(SPORTS_NEWS + $API_KEY);
    newsDataArr=[];
    if(response.status>=200 && response.status<300){
        const myJason = await response.json();
        console.log(myJason);
        newsDataArr = myJason.articles;
    }else{
        console.log(response.status, response.statusText);
    }
    displayNews();
}
const fetchTechnologyNews = async () => {
    const response = await fetch(TECHNOLOGY_NEWS + $API_KEY);
    newsDataArr=[];
    if(response.status>=200 && response.status<300){
        const myJason = await response.json();
        console.log(myJason);
        newsDataArr = myJason.articles;
    }else{
        console.log(response.status, response.statusText);
    }
    displayNews();
}
const fetchEntertanmentNews = async () => {
    const response = await fetch(ENTERTANMENT_NEWS + $API_KEY);
    newsDataArr=[];
    if(response.status>=200 && response.status<300){
        const myJason = await response.json();
        console.log(myJason);
        newsDataArr = myJason.articles;
    }else{
        console.log(response.status, response.statusText);
    }
    displayNews();
}
const fetchQueryNews = async () => {
    if(newsQuery.value==null){
        return;
    }
    const response = await fetch(SEARCH_NEWS+encodeURIComponent(newsQuery.value)+ "&apiKey=" + $API_KEY);
    newsDataArr=[];
    if(response.status>=200 && response.status<300){
        const myJason = await response.json();
        newsDataArr = myJason.articles;
    }else{
        console.log(response.status, response.statusText);
    }
    displayNews();
}
function displayNews(){
    newsdetails.innerHTML = "";
    if(newsDataArr.length==0){
        newsdetails.innerHTML = "<h5>No News Found</h5>";
        return;
    }
    newsDataArr.forEach((news, index) => {
 
        var data=news.publishedAt.split("T");

        var col=document.createElement("div");
        col.className ="col-sm-12 col-md-4 col-lg-3 p-0.5 card  border-danger-subtle text-warning bg-dark";
        var card=document.createElement("div");
        card.className="p-2 m-1";

        var img=document.createElement("img");
        img.setAttribute("height", "matchparent");
        img.setAttribute("width", "100%");
        img.src=news.urlToImage;
        var cardBody=document.createElement("div");


        var newsheading=document.createElement("h5");
        newsheading.className="card-title";
        newsheading.innerHTML=news.title;

        var dateheading=document.createElement("h6");
        dateheading.className="text-primary";
        dateheading.innerHTML=data[0];

        var newsdescription=document.createElement("p");
        newsdescription.className="text-light ";
        newsdescription.innerHTML=news.description;

        var link=document.createElement("a");
        link.className="btn btn-success";
        link.setAttribute("target", "_blank");
        link.href=news.url;
        link.innerHTML="Read More";

        cardBody.appendChild(newsheading);
        cardBody.appendChild(dateheading);
        cardBody.appendChild(newsdescription);
        cardBody.appendChild(link);

        card.appendChild(img);
        card.appendChild(cardBody);

        col.appendChild(card);

        newsdetails.appendChild(col);

    });
}

