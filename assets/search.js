const searchInput = document.getElementById("searchInput");

const historyBox = document.getElementById("historyBox");

function tampilHistory(){

let history =
JSON.parse(
localStorage.getItem("searchHistory")
) || [];

historyBox.innerHTML="";

history.forEach(item=>{

historyBox.innerHTML +=
`
<li class="list-group-item history-item">
${item}
</li>
`;

});

}

searchInput.addEventListener(
"change",
function(){

let value=this.value;

let history=
JSON.parse(
localStorage.getItem("searchHistory")
) || [];

history.unshift(value);

history = history.slice(0,5);

localStorage.setItem(
"searchHistory",
JSON.stringify(history)
);

tampilHistory();

}
);

tampilHistory();