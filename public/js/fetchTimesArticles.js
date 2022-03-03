// Save token created from Times API Developer website
const apiKey = 'cYqjGhicW1jJFvTLPHU0XKQVpFq3SyPa';

// Times Tops Stories
// I'm going to use a staic section
const section = 'home';

// Save URL created from the Times API Developer website
const url = 'https://api.nytimes.com/svc/topstories/v2'

fetch('https://api.nytimes.com/svc/search/v2/articlesearch.json?q=election&api-key=cYqjGhicW1jJFvTLPHU0XKQVpFq3SyPa')
    .then(response => response.json())
    .then(response => {
        articles = response.response.docs;
        console.log(articles)
    });