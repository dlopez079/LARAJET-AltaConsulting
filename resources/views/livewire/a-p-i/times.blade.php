{{-- Times API Fetch 
  x-clock: To Prevent viewing uninitialized template after the page loads , but beofre Alphine loads.
  x-data: To begin the AlphineJS process.  We will pull the docs array and set isloading to true.
  x-init: Initialllized the fetch. --}}

<div role="region" class="border border-black" x-cloak x-data="{ articles: [], 'isLoading': true}" x-init="fetch('https://api.nytimes.com/svc/search/v2/articlesearch.json?q=election&api-key=cYqjGhicW1jJFvTLPHU0XKQVpFq3SyPa')
  .then(response => response.json())
  .then(response => {
      articles = response.response.docs;
      isLoading = false;
      console.log(articles);
  })">
    <h1 class="text-center">New York Times</h1>
    <h1 x-show="isLoading">Loading...</h1>
    <ul x-show="!isLoading" role="list" class="divide-y divide-gray-200">
        <template x-for="article in articles" :key="articles">
            <li
                class="relative bg-white py-5 px-4 hover:bg-gray-50 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600">
                <div class="flex justify-between space-x-3">
                    <div class="min-w-0 flex-1">
                        <a href="#" class="block focus:outline-none">
                            <span class="absolute inset-0" aria-hidden="true"></span>
                            <p class="text-sm font-medium text-gray-900 truncate" x-text="article.headline.main"></p>
                            <p class="text-sm text-gray-500 truncate" x-text="article.web_url"></p>
                        </a>
                    </div>
                    <time datetime="2021-01-27T16:35" class="flex-shrink-0 whitespace-nowrap text-sm text-gray-500">1d
                        ago</time>
                </div>
                <div class="mt-1">
                    <p class="line-clamp-2 text-sm text-gray-600">Use this for some</p>
                </div>
            </li>
        </template>
    </ul>

</div>
