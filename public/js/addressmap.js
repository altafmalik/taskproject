let map;
const myLatLng = { lat: +lat, lng: +lng };
function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: +lat, lng: +lng },
    zoom: 16,
  });
  new google.maps.Marker({
    position: myLatLng,
    map,
    title: truckname,
    label: truckname,
  });
}