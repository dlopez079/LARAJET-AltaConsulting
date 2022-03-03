/**
 * Times Newswire API.
 * With the Times Newswire API, you can get links and metadata for Times' articles as soon as they are published on NYTimes.com. The Times Newswire API provides an up-to-the-minute stream of published articles. You can filter results by source (all, nyt, inyt) and section (arts, business, ...).
 * 
 * /content/{source}/{section}.json
 * 
 */

// Base URL https://api.nytimes.com/svc/news/v3
const url = "https://api.nytimes.com/svc/news/v3"

// Source: There are three sources: all (all), nyt (Business), inyt (world)
// User can select the source.  For now we are using all until we establish a form for user.
const source = 'all'
// ['all','nyt','inyt']

// Use this API key to retrieve information from the New York times.
const apiKey = "cYqjGhicW1jJFvTLPHU0XKQVpFq3SyPa"

// The getSections funcion below will fetch the sections from the NYT.
// For now I'm going to use Admin as the default section.
const section = "admin"

// Use the Async function to obtain the sections for the New York Times Articles.
async function getSections() {
    try {
      const response = await axios.get(`${url}/content/section-list.json?api-key=${apiKey}`);
      const sectionsArr = (response.data.results.map(({ display_name }) => display_name));
      console.log(sectionsArr);
      return sectionsArr;
    } catch (error) {
      console.error(error);
    }       
  }
// getSections();

async function getNewswireAPI() {
    try {
      const response = await axios.get(`${url}/content/${source}/${section}.json?api-key=${apiKey}`);
      const articlesArr = (response.data.results);
      console.log(articlesArr);
    } catch (error) {
      console.error(error);
    }       
  }

  getNewswireAPI();