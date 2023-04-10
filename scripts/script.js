const d = new Date();

var DATE = String(d.getDate()) + '/' + String(d.getMonth()) + '/' + String(d.getFullYear());

var TIME = d.toLocaleString("en-US",

  {
    hour: "numeric",

    minute: "numeric",

    hour12: true
  }

);

// console.log(DATE);

// console.log(TIME);

var dateTime = DATE + ', ' + TIME;

document.getElementById("blogDate").value = dateTime;