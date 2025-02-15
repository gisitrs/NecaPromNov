window.onload = function (){
    slideMin();
    slideMax();
    slideMinSF1();
    slideMaxSF1();
    slideMinSF2();
    slideMaxSF2();
}

const minVal = document.querySelector(".min-val");
const maxVal = document.querySelector(".max-val");
const minValSF1 = document.querySelector(".min-val-sf1");
const maxValSF1 = document.querySelector(".max-val-sf1");
const minValSF2 = document.querySelector(".min-val-sf2");
const maxValSF2 = document.querySelector(".max-val-sf2");

const priceInputMin = document.querySelector(".min-input");
const priceInputMax = document.querySelector(".max-input");
const priceInputMinSF1 = document.querySelector(".min-input-sf1");
const priceInputMaxSF1 = document.querySelector(".max-input-sf1");
const priceInputMinSF2 = document.querySelector(".min-input-sf2");
const priceInputMaxSF2 = document.querySelector(".max-input-sf2");

const minTooltip = document.querySelector(".min-tooltip");
const maxTooltip = document.querySelector(".max-tooltip");
const minTooltipSF1 = document.querySelector(".min-tooltip-sf1");
const maxTooltipSF1 = document.querySelector(".max-tooltip-sf1");
const minTooltipSF2 = document.querySelector(".min-tooltip-sf2");
const maxTooltipSF2 = document.querySelector(".max-tooltip-sf2");

const minGap = 0;
const range = document.querySelector(".slider-track");
const rangeSF1 = document.querySelector(".slider-track-SF1");
const rangeSF2 = document.querySelector(".slider-track-SF2");

const sliderMinValue = parseInt(minVal.min);
const sliderMaxValue = parseInt(maxVal.max);
const sliderMinValueSF1 = parseInt(minValSF1.min);
const sliderMaxValueSF1 = parseInt(maxValSF1.max);
const sliderMinValueSF2 = parseInt(minValSF2.min);
const sliderMaxValueSF2 = parseInt(maxValSF2.max);

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

function slideMinSF1(){
  let gapSF1 = parseInt(maxValSF1.value) - parseInt(minValSF1.value);
  if (gapSF1 <= minGap){
    minValSF1.value = parseInt(maxValSF1.value) - minGap;
  }

  minTooltipSF1.innerHTML = minValSF1.value + " m<sup>2</sup>";
  priceInputMinSF1.value = minValSF1.value;

  setAreaSF1();
}

function slideMaxSF1() {
  let gapSF1 = parseInt(maxValSF1.value) - parseInt(minValSF1.value);
  if (gapSF1 <= minGap){
    maxValSF1.value = parseInt(minValSF1.value) + minGap;
  }
  
  maxTooltipSF1.innerHTML = maxValSF1.value + " m<sup>2</sup>";
  priceInputMaxSF1.value = maxValSF1.value;
  setAreaSF1();
}

function slideMinSF2(){
  let gapSF2 = parseInt(maxValSF2.value) - parseInt(minValSF2.value);
  if (gapSF2 <= minGap){
    minValSF2.value = parseInt(maxValSF2.value) - minGap;
  }

  minTooltipSF2.innerHTML = minValSF2.value + " ar";
  priceInputMinSF2.value = minValSF2.value;

  setAreaSF2();
}

function slideMaxSF2() {
  let gapSF2 = parseInt(maxValSF2.value) - parseInt(minValSF2.value);
  if (gapSF2 <= minGap){
    maxValSF2.value = parseInt(minValSF2.value) + minGap;
  }
  
  maxTooltipSF2.innerHTML = maxValSF2.value + " ar";
  priceInputMaxSF2.value = maxValSF2.value;
  setAreaSF2();
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
  
  range.style.right = 100 - (maxVal.value / sliderMaxValue) * 100 + "%";
  maxTooltip.style.right = 100 - (maxVal.value / sliderMaxValue) * 100 + "%";
  range.style.left = (minVal.value * 100 / sliderMaxValue) + "%";
  //minTooltip.style.left = (minVal.value * 100 / sliderMaxValue) + "%";
  minTooltip.style.right = 100 - (minVal.value / sliderMaxValue) * 100 + "%";
}

function setAreaSF1() {
  rangeSF1.style.right = 100 - (maxValSF1.value / sliderMaxValueSF1) * 100 + "%";
  maxTooltipSF1.style.right = 100 - (maxValSF1.value / sliderMaxValueSF1) * 100 + "%";
  rangeSF1.style.left = (minValSF1.value * 100 / sliderMaxValueSF1) + "%";
  //minTooltip.style.left = (minVal.value * 100 / sliderMaxValue) + "%";
  minTooltipSF1.style.right = 100 - (minValSF1.value / sliderMaxValueSF1) * 100 + "%";
}

function setAreaSF2() {
  rangeSF2.style.right = 100 - (maxValSF2.value / sliderMaxValueSF2) * 100 + "%";
  maxTooltipSF2.style.right = 100 - (maxValSF2.value / sliderMaxValueSF2) * 100 + "%";
  rangeSF2.style.left = (minValSF2.value * 100 / sliderMaxValueSF2) + "%";
  //minTooltip.style.left = (minVal.value * 100 / sliderMaxValue) + "%";
  minTooltipSF2.style.right = 100 - (minValSF2.value / sliderMaxValueSF2) * 100 + "%";
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

function setMinInputSF1() {
  let minPriceSF1 = parseInt(priceInputMinSF1.value);
  if(minPriceSF1 < sliderMinValueSF1) {
    priceInputMinSF1.value = sliderMinValueSF1;
  }
  minValSF1.value = priceInputMinSF1.value;
  slideMinSF1();
}

function setMaxInputSF1() {
  let maxPriceSF1 = parseInt(priceInputMaxSF1.value);
  if(maxPriceSF1 > sliderMaxValueSF1) {
    priceInputMaxSF1.value = sliderMaxValueSF1;
  }
  maxValSF1.value = priceInputMaxSF1.value;
  slideMaxSF1();
}

function setMinInputSF2() {
  let minPriceSF2 = parseInt(priceInputMinSF2.value);
  if(minPriceSF2 < sliderMinValueSF2) {
    priceInputMinSF2.value = sliderMinValueSF2;
  }
  minValSF2.value = priceInputMinSF2.value;
  slideMinSF2();
}

function setMaxInputSF2() {
  let maxPriceSF2 = parseInt(priceInputMaxSF2.value);
  if(maxPriceSF2 > sliderMaxValueSF2) {
    priceInputMaxSF2.value = sliderMaxValueSF2;
  }
  maxValSF2.value = priceInputMaxSF2.value;
  slideMaxSF2();
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
    
    var filterBySquare = 1

    var minValue = parseInt(document.getElementById('minRangeValue').value);
    var maxValue = parseInt(document.getElementById('maxRangeValue').value);
    
    var minSquareValueObject = parseInt(document.getElementById('minSquareValue').value);
    var maxSquareValueObject = parseInt(document.getElementById('maxSquareValue').value);

    var minSquareParcelValue = parseInt(document.getElementById('minSquareParcelValue').value);
    var maxSquareParcelValue = parseInt(document.getElementById('maxSquareParcelValue').value);

    var minSquareValue = 0;
    var maxSquareValue = 0;

    if (isNaN(minSquareValueObject))
    {
       minSquareValueObject = 0;
    }

    if (isNaN(maxSquareValueObject))
    {
       maxSquareValueObject = 1000000000;
    }

    if (isNaN(minSquareParcelValue))
    {
      minSquareParcelValue = 0;
    }
  
    if (isNaN(maxSquareParcelValue))
    {
      maxSquareParcelValue = 1000000000;
    }

    var firstElementId = '';
    var secondElementId = '';
    
    var value = parseInt(document.getElementById('sortDropdownId').value);
    var typeA = '';
    var typeB = '';

    var hideValueA = 0;
    var hideValueB = 0; 

    obj.sort(function(a, b) {
        var positionA = $(a).data("position");
        var positionB = $(b).data("position");
        
        var contentA = parseInt( positionA.split("-")[0]);
        var contentB = parseInt( positionB.split("-")[0]);
        typeA = parseInt( positionA.split("-")[1]);
        typeB = parseInt( positionB.split("-")[1]);
        
        if (typeA == 4){
          squareFeetA = parseInt( positionA.split("-")[3]);
        }
        else {
          squareFeetA = parseInt( positionA.split("-")[2]);
        }

        if (typeB == 4){
          squareFeetB = parseInt( positionB.split("-")[3]);
        }
        else {
          squareFeetB = parseInt( positionB.split("-")[2]);
        }

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

        if (typeA != 4)
        {
          minSquareValue = minSquareValueObject;
          maxSquareValue = maxSquareValueObject;
        }
        else
        {
          minSquareValue = minSquareParcelValue;
          maxSquareValue = maxSquareParcelValue;
        }
        
        //Check ContentA visibility
        if (contentA <= minValue || contentA >= maxValue){
            hideValueA = 1;
        }

        if (hideValueA == 0)
        {
          if (squareFeetA <= minSquareValue || squareFeetA >= maxSquareValue){
            hideValueA = 0;
          }
        }

        if (typeB != 4)
        {
            minSquareValue = minSquareValueObject;
            maxSquareValue = maxSquareValueObject;
        }
        else
        {
            minSquareValue = minSquareParcelValue;
            maxSquareValue = maxSquareParcelValue;
        }
        
        //Check ContentB visibility
        if (contentB <= minValue || contentB >= maxValue){
            hideValueB = 1;
        }

        if (hideValueB == 0){
          if (squareFeetB <= minSquareValue || squareFeetB >= maxSquareValue){
            hideValueB = 1;
          }
        }
        
        if (hideValueA == 1){
          $("#"+ firstElementId + "").css("display", "none");
        }

        if (hideValueB == 1){
          $("#"+ secondElementId + "").css("display", "none");
        }
        
        var sortValue = 0;

        //Reset variables
        hideValueA = 0;
        hideValueB = 0;

        return sortValue
      });
      
      $("#mylist").prepend(obj);
}

function sortProperties() {
  var obj = [];
  var value = parseInt(document.getElementById('sortDropdownId').value);

  $('*[id*=realestate]').each(function(index, value) {
    obj[index] = $(this);
 });

 obj.sort(function(a, b) {
   var positionA = $(a).data("position");
   var positionB = $(b).data("position");
  
   var contentA = parseInt( positionA.split("-")[0]);
   var contentB = parseInt( positionB.split("-")[0]);
   var contentASquareFeet = parseInt( positionA.split("-")[2]);
   var contentBSquareFeet = parseInt( positionB.split("-")[2]);
   typeA = parseInt( positionA.split("-")[1]);
   typeB = parseInt( positionB.split("-")[1]);

   if (typeA == 4){
    contentASquareFeet = parseInt( positionA.split("-")[3]);
   }

   if (typeB == 4){
    contentBSquareFeet = parseInt( positionB.split("-")[3]);
   }
  
  var sortValue = 0;

  if (value == 1){
      sortValue = contentA < contentB ? -1 : contentA > contentB ? 1 : 0;
  }
  else if (value == 2){
      sortValue = contentA > contentB ? -1 : contentA < contentB ? 1 : 0
  }
  if (value == 3){
    sortValue = contentASquareFeet < contentBSquareFeet ? -1 : contentASquareFeet > contentBSquareFeet ? 1 : 0;
  }
  else if (value == 4){
    sortValue = contentASquareFeet > contentBSquareFeet ? -1 : contentASquareFeet < contentBSquareFeet ? 1 : 0
  }

  return sortValue
  });

  $("#mylist").prepend(obj);
}