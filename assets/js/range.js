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

function filterProperties(){
     var obj = [];

     var isAllRepSelected = $("#rlestfilter").hasClass('is_active');
     var selectedPosition = 0;

     if ($("#rlestfilter").hasClass('is_active') === true){
         selectedPosition = parseInt($("#rlestfilter").data("position"));
     }
     else if ($("#housesfilter").hasClass('is_active') === true){
        selectedPosition = parseInt($("#housesfilter").data("position"));
     }
     else if ($("#flatsfilter").hasClass('is_active') === true){
      selectedPosition = parseInt($("#flatsfilter").data("position"));
     }
     else if ($("#cottagesfilter").hasClass('is_active') === true){
      selectedPosition = parseInt($("#cottagesfilter").data("position"));
     }
     else if ($("#parcelsfilter").hasClass('is_active') === true){
      selectedPosition = parseInt($("#parcelsfilter").data("position"));
     }
     else if ($("#villagesfilter").hasClass('is_active') === true){
      selectedPosition = parseInt($("#villagesfilter").data("position"));
     }
     else if ($("#issuingbfilter").hasClass('is_active') === true){
      selectedPosition = parseInt($("#issuingbfilter").data("position"));
     }
     else if ($("#apartmentsfilter").hasClass('is_active') === true){
      selectedPosition = parseInt($("#apartmentsfilter").data("position"));
     }
     else if ($("#replacementsfilter").hasClass('is_active') === true){
      selectedPosition = parseInt($("#replacementsfilter").data("position"));
     }


     $('*[id*=realestate]').each(function(index, value) {
        obj[index] = $(this);
    });
    
    var minValue = parseInt(document.getElementById('minRangeValue').value);
    var maxValue = parseInt(document.getElementById('maxRangeValue').value);
    var firstElementId = '';
    var secondElementId = '';
    
    var value = parseInt(document.getElementById('sortDropdownId').value);
    var typeA = '';
    var typeB = '';

    obj.sort(function(a, b) {
        var positionA = $(a).data("position");
        var positionB = $(b).data("position");
        
        var contentA = parseInt( positionA.split("-")[0]);
        var contentB = parseInt( positionB.split("-")[0]);
        typeA = parseInt( positionA.split("-")[1]);
        typeB = parseInt( positionB.split("-")[1]);

        firstElementId = a[0].attributes[0].nodeValue;
        secondElementId = b[0].attributes[0].nodeValue;

        if (isAllRepSelected == true || selectedPosition == typeA){
          $("#"+ firstElementId + "").css("display", "block");
        }
        else {
          $("#"+ firstElementId + "").css("display", "none");
        }

        if (isAllRepSelected == true || selectedPosition == typeB){
          $("#"+ secondElementId + "").css("display", "block");
        }
        else {
          $("#"+ secondElementId + "").css("display", "none");
        }

        if (contentA < minValue || contentA > maxValue){
            $("#"+ firstElementId + "").css("display", "none");
        }

        if (contentB < minValue || contentB > maxValue){
            $("#"+ secondElementId + "").css("display", "none");
        }
        
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