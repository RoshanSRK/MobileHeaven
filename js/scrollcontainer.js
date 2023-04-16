window.addEventListener('load', function() {
    const leftButtons = document.querySelectorAll('.left_button');
    const rightButtons = document.querySelectorAll('.right_button');
    
    rightButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
          //const direction = btn.dataset.direction;
          console.log('right button pressed');
          console.log(btn.closest);
          const container = btn.parentElement.querySelector('.box-container');

      
        //   if (direction === 'right') {
            container.scrollLeft += 600; // change the value as needed to adjust the amount of scrolling
        //   } else if (direction === 'down') {
        //     container.scrollTop += 100; // change the value as needed to adjust the amount of scrolling
        //   }
         });
      });
    
      leftButtons.forEach((btn) => {
        btn.addEventListener('click', () => {
          //const direction = btn.dataset.direction;
          console.log('left button pressed');
          const container = btn.parentElement.querySelector('.box-container');
      
        //   if (direction === 'right') {
            container.scrollLeft -= 600; // change the value as needed to adjust the amount of scrolling
        //   } else if (direction === 'down') {
        //     container.scrollTop += 100; // change the value as needed to adjust the amount of scrolling
        //   }
         });
      });
    
});