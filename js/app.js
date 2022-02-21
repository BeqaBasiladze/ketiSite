

/* modal */

$(function(){

    const modalCall = $("[data-modal]");
    const modalClose = $("[data-close]");

    modalCall.on("click", function(event){
        event.preventDefault();

        let $this = $(this);
        let modalId = $this.data('modal');

         console.log(modalId);

    });
});

