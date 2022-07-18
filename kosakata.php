<?php include 'header.php'; ?><br><br><br>
<div class="container mt-3 ml-5">
    <h3 class="fw-bold text-center text-light mb-5">KOSAKATA</h3>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-hover" id="table">
                <thead>
                    <tr>
                        <th scope="col">Ambon</th>
                        <th scope="col">Indonesia</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php foreach (findAll('kosakata') as $k) : ?>
                        <tr>
                            <td><?= $k['ambon']; ?></td>
                            <td><?= $k['indonesia']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- Auto search -->
<script>
    $(document).ready(function() {
        $('#table').DataTable();
        // $("#search").on("keyup", function() {
        //     var value = $(this).val().toLowerCase();
        //     $("#myTable tr").filter(function() {
        //         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        //     });
        // });
    });
</script>
<?php include 'footer.php'; ?>