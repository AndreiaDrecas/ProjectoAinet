@extends('master')

@section('main_content')

<a name="about"></a>
<div class="intro-header">
   <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="intro-message">
                <h1>Urban Farmers' Market</h1>
                <br>
                <h3>Projeto de Ainet</h3>
                <hr class="intro-divider">
            </div>
        </div>
    </div>
</div>
</div>

<!-- /.container -->

<div class="content-section-a">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <table class="table table-striped" >
                            <!-- On cells (`td` or `th`) -->
                            <div>
                                <h3>Top Sellers</h3>
                                <br>
                            </div>
                            <tr>
                                <th class="topSells">Product</th>
                                <th class="score">Score</th>
                                <th class="sellsCount">Sells Count</th>
                            </tr>
                            <tr>
                                <!-- On rows -->
                                <td class="">OLA</td>
                                <td class="">OLA</td>
                                <td class="">OLA</td>
                            </tr>
                            <tr>
                                <!-- On rows -->
                                <td class="">OLA</td>
                                <td class="">OLA</td>
                                <td class="">OLA</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-section-b">
    <div class="container">
        <div class="col-lg-10">
            <h3>Products Available</h3>
            <br>
            <form class="form-inline">
                <select class="form-control">
                  <option>--Location--</option>
                  <option>Leiria</option>
                  <option>Lisboa</option>
                </select>
                <input class="btn btn-default" type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
@endsection
