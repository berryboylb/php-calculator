

$(document).ready(function() {
  // const num1 =   $('#num1').val();
  // const num2 =  $('#num2').val();
  // const num3 =  $('#num3').val();
  // const num4 =  $('#num4').val();
  // const num5 =  $('#num5').val();
  // const num6 =  $('#num6').val();
  // const num7 =  $('#num7').val();
  // const num8 =  $('#num8').val();
  // const num9 =  $('#num9').val();
  // const num0 =  $('#num0')

  $(".num").click(function(){
      var number = $(this).val();
      $('#text-con').val(function() {
        return this.value + number;
    });

      console.log(num0.val())
      
  })

  

 

  const numbers = [num1, num2, num3, num4, num5, num6, num7, num8, num9, num0];
  

//   const mode = [1, 2, 3, 4, 5]

    // for (i = 0; i < numbers.length; i++) {
    //     console.log(numbers[i]);
    // } 
  
    // numbers.forEach(function(number) {
    //     console.log(number);
    //     number.click(function(){
    //         console.log("hi")
    //     })
    // });
    
  });