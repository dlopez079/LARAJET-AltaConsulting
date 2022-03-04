/**
 * Times Newswire API.
 * With the Times Newswire API, you can get links and metadata for Times' articles as soon as they are published on NYTimes.com. The Times Newswire API provides an up-to-the-minute stream of published articles. You can filter results by source (all, nyt, inyt) and section (arts, business, ...).
 * 
 * /content/{source}/{section}.json
 * 
 */

// Base URL https://api.nytimes.com/svc/news/v3
// const url = "https://api.nytimes.com/svc/news/v3"

// Source: There are three sources: all (all), nyt (Business), inyt (world)
// User can select the source.  For now we are using all until we establish a form for user.
const source = 'all'
// ['all','nyt','inyt']

// Use this API key to retrieve information from the New York times.
const apiKey = "cYqjGhicW1jJFvTLPHU0XKQVpFq3SyPa"


// Use the Async function to obtain the sections for the New York Times Articles.
async function getSections() {
    try {
      // Base URL https://api.nytimes.com/svc/news/v3
    let url = "https://api.nytimes.com/svc/news/v3"
    // The getSections funcion below will fetch the sections from the NYT.
      // For now I'm going to use Admin as the default section.
      let section = "admin"
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
      // Base URL https://api.nytimes.com/svc/news/v3
      let url = "https://api.nytimes.com/svc/news/v3"

      // The getSections funcion below will fetch the sections from the NYT.
      // For now I'm going to use Admin as the default section.
      let section = "admin"
      const response = await axios.get(`${url}/content/${source}/${section}.json?api-key=${apiKey}`);
      const articlesArr = (response.data.results);

      /**
       * I confirmed that the data is showing in the console.  
       * I will turn this off when read for production. 
       * I disabled this console log so I can focus on the for loop console.log. 
       */
      console.log(articlesArr);

      // Because this is an object that contains an array, we must loop through the informaiton and display it on the dom.
      for (let i = 0; i < articlesArr.length; i++) { 
          
        // I confirmed that the data is showing in the console. 
        // console.log(articlesArr[i])

        // Save title value from array of each record to variable.
        // let titleValue = articlesArr[i].title;
        // let title = document.createTextNode(titleValue);

        // let urlValue = articlesArr[i].url;


        // // Get element by ID.
        // let titleSpan = document.getElementById("titleSpan");
        // let url = articlesArr[i].url;
        // let newCard = document.createElement("li");
        // let button = document.createElement("button");
        // newCard.appendChild(button);
        // button.appendChild(title);
        // // Add a class to the list item tag.
        // newsWire.classList.add('row-span-3')
        // button.classList.add('bg-indigo-300', 'p-5')
        // newsWire.appendChild(newCard);   
        // console.log(newCard)
      }
 
    } catch (error) {
      console.error(error);
    }       
  }

  // getNewswireAPI();

  // Add Top stories from the new york times.
  async function getTopStories() {
    try {
      let url = "https://api.nytimes.com/svc/topstories/v2"

      // The getSections funcion below will fetch the sections from the NYT.
      // For now I'm going to use Admin as the default section.
      let section = "home"

      const response = await axios.get(`${url}/${section}.json?api-key=${apiKey}`);
      const articlesArr = (response.data.results);

      /**
       * I confirmed that the data is showing in the console.  
       * I will turn this off when read for production. 
       * I disabled this console log so I can focus on the for loop console.log. 
       */
      console.log(articlesArr);

      // Because this is an object that contains an array, we must loop through the informaiton and display it on the dom.
      for (let i = 0; i < articlesArr.length; i++) { 
          
        /** Create the following list item with classes
         * [x]: Create the li tag
         * [x]: Append title to list item tag.
         * [x]: Append the classes to the li tag
         * [x]: Create the title div.
         * [x]: Append title div to list item tag.
         * [x]: Add classes to title div.
         * [x]: Append the following static text to div: 'NYT'
         * 
         */   
        let list = document.getElementById('list'); // obtain list tag via id.
        let li = document.createElement("li"); // Create a list item tag.
        
        // Obtain title value from API call. 
        let titleValue = articlesArr[i].title; // obtain title value from API Array.
        let title = document.createTextNode(titleValue); // convert value to node.

        //Obtain URL value fromt API Call.
        let artUrlValue = articlesArr[i].url;
        let artUrl = document.createTextNode(artUrlValue);
        // console.log(artUrl); Confirmed that artUrl works.

        // Obtain image from API Call.
        let imageIcon = articlesArr[i].multimedia[0].url;
        // [] Create a div
        // [] Create img tag
        // [] Add attributes to image tag.

        li.classList.add('col-span-1', 'flex', 'shadow-sm', 'rounded-md');
        list.appendChild(li); // Added list item to the un ordered list from the DOM.

        // Create an anchor tag and wrap the list item.
        let anchorTag = document.createElement('a');
        anchorTag.setAttribute('href', artUrlValue);
        list.appendChild(anchorTag);

        anchorTag.appendChild(li);

        // Create title Div
        let initDiv = document.createElement("div"); // Create a title di tag.
        // Create White Body Div
        let bodyDiv = document.createElement("div"); // Create a title div tag.

        // Append Both The title Div and the body div to list item tag.
        li.appendChild(initDiv);
        li.appendChild(bodyDiv);

        // Create the Initials and class that will go in the initial div.
        let initials = "NYT"
        initDiv.classList.add('flex-shrink-0', 'flex', 'items-center', 'justify-center', 'w-16', 'bg-pink-600', 'text-white', 'text-sm', 'font-medium', 'rounded-l-md');
        initDiv.append(initials); // Add initials to initDiv. 

        // Create class for the Body div
        bodyDiv.classList.add('flex-1', 'flex', 'items-center', 'justify-between', 'border-t', 'border-r', 'border-b', 'border-gray-200', 'bg-white', 'rounded-r-md', 'truncate');

        let bodyTextDiv = document.createElement('div')
        bodyDiv.appendChild(bodyTextDiv)
        bodyTextDiv.classList.add('flex-1', 'px-4', 'py-2', 'text-sm', 'truncate');

        // Add two p tags to bodyTextDiv
        let bodyTextDivH2Tag = document.createElement('h2');
        bodyTextDivH2Tag.classList.add('text-gray-900', 'font-medium', 'hover:text-gray-600', 'truncate')
        bodyTextDiv.appendChild(bodyTextDivH2Tag);

        let bodyTextDivPTag = document.createElement('p');
        bodyTextDivPTag.classList.add('text-gray-500', 'truncate')
        bodyTextDiv.appendChild(bodyTextDivPTag);

        bodyTextDivH2Tag.append(title);
        bodyTextDivPTag.append(artUrl);

      }

    } catch (error) {
      console.error(error);
    }       
  }

  getTopStories()