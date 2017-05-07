@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Ranking</div>

                                   <div class="panel-body">
                    
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nazwa użytkownika</th>
                            <th>Czas trwania testu</th>
                            <th>Poprawne odpowiedzi</th>
                            <th>Niepoprawne odpowiedzi </td>
                        </tr>
                        </thead>
                        
                    <?php foreach ($exams as $exam){ ?>
                        <tr>
                            <td><?php echo $exam ->name ?></td>
                            <td><?php echo $exam ->duration ?></td>
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
