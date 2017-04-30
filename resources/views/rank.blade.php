@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                                   <div class="panel-body">
                    
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nazwa użytkownika</th>
                            <th>Poprawne odpowiedzi</th>
                            <th>Niepoprawne odpowiedzi </td>
                        </tr>
                        </thead>
                        
                    <?php foreach ($exams as $exam){ ?>
                        <tr>
                            <td><?php echo $exam ->id_user ?></td>
                            <td><?php echo $exam ->correct_words ?></td>
                            <td><?php echo $exam ->incorrect_words ?></td>

                        </tr>
                    <?php } ?>

                                                    
                        
                       
                    </table>
                </div>

                                                    
                        
                       
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
