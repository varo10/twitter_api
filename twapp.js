var tweets = new XMLHttpRequest();
tweets.open("GET", "https://api.twitter.com/1.1/statuses/user_timeline.json?count=2&screen_name=varop10_alvaro", false);
tweets.send(null);

var resp = JSON.parse(tweets.response);
var deg = " ° " + resp.query.results.channel.units.temperature;
var icon = new XMLHttpRequest();

var temp = resp.query.results.channel.item.condition.temp + deg + "<br />";
var high = resp.query.results.channel.item.forecast[0].high + deg;
var low = resp.query.results.channel.item.forecast[0].low + deg;

document.getElementById("temp").innerHTML = temp;
document.getElementById("high").innerHTML = high;
document.getElementById("low").innerHTML = low;


