const numHours = document.getElementById("num-hours");
const numFuel = document.getElementById("num-fuel");
const resultRender = document.getElementById("results");

const vehicleData = [
  {
    id: "excavator",
    name: "Excavator",
    emissionPerHour: 200,
    fuelCapacity: 2000, 
    image: "./excavator.png",
  },
];

const valueChange = (km) => {
  const hours = numHours.value;
  const fuel = numFuel.value;

  const suggestion = returnSuggestion(hours, km, fuel);

  let addString = "";

  let minVehicle = suggestion.reduce(function (prev, curr) {
    return prev.totalEmissions < curr.totalEmissions ? prev : curr;
  });

  suggestion.forEach((machine) => {
    const emissionsInTons = (machine.totalEmissions / 1000000).toFixed(2);
    addString += `
    <div class="col-md-4 col-sm-12 flexer-col">
    <img src=${machine.image} alt="" width="100" />
    <h3 ${
      machine.totalEmissions === minVehicle.totalEmissions
        ? 'class="min-emission"'
        : ""
    }>${machine.name}</h3>
    <p>Machine was operated for <strong>${hours}</strong> hour(s)</p>
    <p>Total CO2 emission for the operation is <strong>${emissionsInTons}</strong> tons CO2</p>
    <p>Amount of fossil fuels consumed: <strong>${fuel}</strong> kg</p>
  </div>
  `;
  });

  resultRender.innerHTML =
    `<p>Kilometers: ${km.toFixed(2)} km</p>` + addString;
};

const calculateEmission = (hours, km, em) => {
  const emissions = hours * km * em;
  return emissions;
};

const returnSuggestion = (hours, km, fuel) => {
  let machines = [];

  vehicleData.forEach((machine) => {
    const totalEmissions = calculateEmission(
      hours,
      km,
      machine.emissionPerHour
    );

    if (totalEmissions > 0) {
      machines.push({
        name: machine.name,
        totalEmissions: totalEmissions,
        image: machine.image,
      });
    }
  });

  return machines;
};

const onButtonClick = () => {
  const km = parseFloat(document.getElementById("num-km").value);

  if (!isNaN(km)) {
    valueChange(km);
  } else {
    resultRender.innerHTML =
      "<h3 class='alert'>Please enter a valid number of kilometers</h3>";
  }
  const c_name = document.querySelector("input[name='c_name']").value;
  const year = document.querySelector("input[name='year']").value;
  const hour = document.getElementById("num-hours").value;
  const kilograms = document.getElementById("num-fuel").value;
  const resultRender = document.getElementById("results");

  const data = {
    c_name: c_name,
    year: year,
    hour: hour,
    kilograms: kilograms,
    kilometres: resutRender
  };

  fetch('connect_calc.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
  })
  .then(response => response.text())
  .then(data => {
    document.getElementById("results").innerHTML = data;
  })
  .catch((error) => {
    console.error('Error:', error);
  });
};