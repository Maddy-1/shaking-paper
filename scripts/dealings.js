function makeView(filename) {
  // make the json into post preview
};

function postformat(filemname) {
  // populate post form
};

// Gets data from fisrt.json now need to build post form then populate similarly
const header = document.querySelector('header');
const section = document.querySelector('section');

let requestURL = 'https://raw.githubusercontent.com/Maddy-1/shaking-paper/main/posts/first.json';

let request = new XMLHttpRequest();
request.open('GET', requestURL);
request.responseType = 'json';
request.send();

request.onload = function() {
  const superHeroes = request.response;
  populateHeader(superHeroes);
  //showHeroes(superHeroes);
}

function populateHeader(obj) {
  const myH1 = document.createElement('h1');
  myH1.textContent = obj['start_point'];
  header.appendChild(myH1);

  const myPara = document.createElement('p');
  myPara.textContent = 'Start Point: ' + obj['start_point']  +' Date: ' + obj['date'];
  header.appendChild(myPara);
}
