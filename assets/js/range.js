window.onload = function (){
    slideMin();
    slideMax();
}

const minVal = document.querySelector(".min-val");
const maxVal = document.querySelector(".max-val");
const priceInputMin = document.querySelector(".min-input");
const priceInputMax = document.querySelector(".max-input");
const minTooltip = document.querySelector(".min-tooltip");
const maxTooltip = document.querySelector(".max-tooltip");
const minGap = 0;
const range = document.querySelector(".slider-track");
const sliderMinValue = parseInt(minVal.min);
const sliderMaxValue = parseInt(maxVal.max);

function slideMin() {
  let gap = parseInt(maxVal.value) - parseInt(minVal.value);
  if (gap <= minGap){
    minVal.value = parseInt(maxVal.value) - minGap;
  }

  minTooltip.innerHTML = "€" + minVal.value;
  priceInputMin.value = minVal.value;
  setArea();
}

function slideMax() {
  let gap = parseInt(maxVal.value) - parseInt(minVal.value);
  if (gap <= minGap){
    maxVal.value = parseInt(minVal.value) + minGap;
  }
  
  maxTooltip.innerHTML = "€" + maxVal.value;
  priceInputMax.value = maxVal.value;
  setArea();
}

function setArea() {
  /*range.style.left = `${
    ((minVal.value - sliderMinValue) / (sliderMaxValue - sliderMinValue)) * 100
  }%`;

  range.style.left = (minVal.value / sliderMaxValue) * 100 + "%";
  minTooltip.style.left = (minVal.value / sliderMaxValue) * 100 + "%";
  range.style.right = `${
    100 -
    ((maxVal.value - sliderMinValue) / (sliderMaxValue - sliderMinValue)) * 100
  }%`;
  maxTooltip.style.right = 100 - (maxVal.value / sliderMaxValue) * 100 + "%";
  */
  
  range.style.left = (minVal.value * 100 / sliderMaxValue) + "%";
  minTooltip.style.left = (minVal.value * 100 / sliderMaxValue) + "%";
  range.style.right = 100 - (maxVal.value / sliderMaxValue) * 100 + "%";
  maxTooltip.style.right = 100 - (maxVal.value / sliderMaxValue) * 100 + "%";
}

function setMinInput() {
  let minPrice = parseInt(priceInputMin.value);
  if(minPrice < sliderMinValue) {
    priceInputMin.value = sliderMinValue;
  }
  minVal.value = priceInputMin.value;
  slideMin();
}

function setMaxInput() {
  let maxPrice = parseInt(priceInputMax.value);
  if(maxPrice > sliderMaxValue) {
    priceInputMax.value = sliderMaxValue;
  }
  maxVal.value = priceInputMax.value;
  slideMax();
}

function testFunction(value){
     var obj = [];

     $('*[id*=realestate]:visible').each(function(index, value) {
        obj[index] = $(this);
    });
    
    var firstValue = 0;

    obj.sort(function(a, b) {
        
        var contentA = parseInt( $(a).data("position"));
        var contentB = parseInt( $(b).data("position"));
        
        var sortValue = 0;

        if (value == 1){
            sortValue = contentA < contentB ? -1 : contentA > contentB ? 1 : 0;
        }
        else if (value == 2){
            sortValue = contentA > contentB ? -1 : contentA < contentB ? 1 : 0
        }

        return sortValue
      });

      $("#mylist").prepend(obj);
}