let urlGeonames = "api.geonames.org/citiesJSON?";
let urlWeather = "http://api.weatherapi.com/v1";
const weatherApi = {
    "key" : "721d32aa0b73417e9d000455230905"
}
let dnes = document.getElementById("dnes");
let zajtra = document.getElementById("zajtra");
let pozajtra = document.getElementById("pozajtra");
let miesto = document.getElementById("miesto");
let lat;
let lon;
let parsedJsonApi;
function loadDocWeather() {
    let city = document.getElementById("city").value;
    fetch("https://api.weatherapi.com/v1/forecast.json?key=721d32aa0b73417e9d000455230905&q=Levice&days=2&aqi=no&alerts=no")
        .then(function(response) {
            if (response.status === 200){
                return response.json();
            }
        })
        .then(myJson => {
            console.log(myJson["location"][0]);
        });


}



