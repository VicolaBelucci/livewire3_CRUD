<div 
    x-data="{open: false}"
    x-show="open"
    @notify.window="Toastify({
                    text: $event.detail.message,
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: 'top', 
                    position: 'left', 
                    stopOnFocus: true, 
                    style: {
                    background: 'linear-gradient(to right, #00b09b, #96c93d)',
                    },
                    onClick: function(){}       
                    }).showToast();"
>
</div>