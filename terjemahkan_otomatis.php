<?php include 'header.php'; ?>
<div class="container pb-5 pt-5">
    <h3 class="mt-5 text-center mb-5 fw-bold text-primary">TERJEMAHKAN OTOMATIS</h3>
    <div class="row text-center text-primary position-relative">
        <button id="tukar" class="btn position-absolute accordion-flush start-50 top-0 translate-middle-x display-inline-block" style="height: 44px; width: auto;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
            </svg>
        </button>
        <div class="col-6 border border-primary border-end-0">
            <h3 class="text-capitalize title1">ambon</h3>
        </div>
        <div class="col-6 border border-primary border-start-0">
            <h3 class="text-capitalize title2">indonesia</h3>
        </div>
        <div class="col-lg-6 col-sm-12 border border-primary position-relative">
            <textarea autocomplete="off" class=" mt-2 border border-0 bg-transparent" name="input" id="input"></textarea>
            <button type="reset" class="buttonhapus btn" onclick="$('#input').val('');$('#output').text('')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace" viewBox="0 0 16 16">
                    <path d="M5.83 5.146a.5.5 0 0 0 0 .708L7.975 8l-2.147 2.146a.5.5 0 0 0 .707.708l2.147-2.147 2.146 2.147a.5.5 0 0 0 .707-.708L9.39 8l2.146-2.146a.5.5 0 0 0-.707-.708L8.683 7.293 6.536 5.146a.5.5 0 0 0-.707 0z" />
                    <path d="M13.683 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-7.08a2 2 0 0 1-1.519-.698L.241 8.65a1 1 0 0 1 0-1.302L5.084 1.7A2 2 0 0 1 6.603 1h7.08zm-7.08 1a1 1 0 0 0-.76.35L1 8l4.844 5.65a1 1 0 0 0 .759.35h7.08a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1h-7.08z" />
                </svg>
            </button>
        </div>
        <div class="col-lg-6 .col-sm-12 pb-3 border border-primary text-dark text-start pt-3">
            <div class="card mt-2 ps-2 pe-3 border border-0">
                <div class="card-text border border-0" id="output">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const textarea = document.querySelector('textarea');
    textarea.addEventListener('keyup', e => {
        textarea.style.height = "auto";
        let scHeight = e.target.scrollHeight;
        textarea.style.height = `${scHeight}px`;
    });
</script>
<?php include 'footer.php'; ?>