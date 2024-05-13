<?php include 'include/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <form action="?page=get-series" method="post">
                            <h4 class="text-center fw-bolder">Series</h4>
                            <hr>
                            <div class="row">
                                <label for="firstValue" class="col-md-3">First Value</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" placeholder="Enter First Value of Series" name="first_value">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="lastValue" class="col-md-3">Last Value</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" placeholder="Enter Last Value of Series" name="last_value">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-3">option</label>
                                <div class="col-md-9">
                                    <label for=""><input type="radio" name="option" value="even"> Even</label>
                                    <label for=""><input type="radio" name="option" value="odd"> Odd</label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="totalValue" class="col-md-3">Total Values</label>
                                <div class="col-md-9">
                                    <textarea type="number" class="form-control" rows="5" disabled>
                                        <?php echo isset($totalValue) ? $totalValue : ''?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="">
                                    <input type="submit" class="btn btn-outline-success col-md-12 rounded-0" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php' ?>