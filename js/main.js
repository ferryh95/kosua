document.addEventListener('DOMContentLoaded', function () {

  const success = (position) => {
    console.log(position);
    const lat = position.coords.latitude;
    const long = position.coords.lonitude;

    const geroAPIURL = 'https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${lat}&longitude=${long}&localityLanguage=en'

    fetch(geroAPIURL)
      .then(res => res.json())
      .then(data => {
        console.log(data.city);
        getWeatherData(data.city)
      });
  }

  const error = () => {
    alert('Unable to retrieve your location');
  }

  navigator.geolocation.getCurrentPosition(success, error);


  /*date*/
  const date = new Date();
  let year = date.getFullYear();
  let day = date.toLocaleDateString('en-EN', {
    weekday: 'short'
  })
  let month = date.getMonth() + 1;
  let dates = date.getDate();
  console.log(dates);

  const yeartxt = document.querySelector("#year");
  const daytxt = document.querySelector("#day");
  const monthtext = document.querySelector("#mondate");
  const datestext = document.querySelector("#daydate");
  yeartxt.textContent = year;
  daytxt.textContent = day;
  monthtext.textContent = month;
  datestext.textContent = dates;
});

function getWeatherData(location) {
  console.log(location);
  const apiKey = "9ed2191923d3aedfe5f28b2baa27c194";
  const url = `https://api.openweathermap.org/data/2.5/weather?q=${location}&units=metric&appid=${apiKey}`;
  return fetch(url)
    .then(response => response.json())
    .then(data => {
      const weatherData = {
        temperature: data.main.temp,
        condition: data.weather[0].main,
        location: data.name,
      };
      updateUI(weatherData);
    });
}

function updateUI(weatherData) {
  const temperature = document.querySelector("#temperature");
  const condition = document.querySelector("#condition");
  const location = document.querySelector("#location");

  temperature.textContent = `${weatherData.temperature}°C`;
  condition.textContent = weatherData.condition;
  location.textContent = weatherData.location;
}


/*swipper*/
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

/*event swipper*/
var swiper2 = new Swiper(".swiper2", {
  slidesPerView: 3,
  spaceBetween: 60,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});