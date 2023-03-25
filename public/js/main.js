function callOverlay(element) {
    $(element).append(
        `<div id="overlay">
            <div class="spinner-icon">
                <div class="spinner-border" style="width: 3rem; height: 3rem;color:white" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>`
    );
    $('#overlay').show();
}

function removeOverlay() {
    $('#overlay').remove();
}	