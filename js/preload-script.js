window.addEventListener('DOMContentLoaded', function() {
  'use strict';
  var ql = QueryLoader2(document.querySelector('.loader-wrapper'), {
    barColor: '#efefef',
    backgroundColor: '#badbad',
    percentage: true,
    barHeight: 1,
    minimumTime: 200,
    fadeOutTime: 1000,
  });
});



// $(document).ready(function () {
//   $("body").queryLoader2({
//       barColor:"#6e6d73",
//       backgroundColor:"#fff1b0",
//       percentage:true,
//       barHeight:30
//   });
// });
