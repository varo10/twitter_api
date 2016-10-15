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

//Consumer key: fn0UlCH65zataX9f8Kf4WxakP
//Consumer secret: 3bkTTeZXCw9irUopXtYkbt5GZYH6TEqo4o7B9M2XOrqZQ94phs
//Access token: 3168949561-eSU7ckyxKdmhEyhGolzy72ygK4NjwxWHI7LwvDu
//Access token secret: ixaR4BTH9Y9tXIpxVlWnT3OAneqnSNZQOjg9AWZ5r3BuC

//Bearer token credentials: 