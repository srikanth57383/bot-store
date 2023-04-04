<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- <h4 class="card-title">Expense Ingestion Records</h4> -->
                            </div>
                            <div class="card-body">
                                <table id="datatable-buttons1" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>From Date</th>
                                            <th>To Date</th>
                                            <th>Utility</th>
                                            <th>Rent</th>
                                            <th>Travel's</th>
                                            <th>Employee Loans</th>
                                            <th>Others</th>
                                            <th>Total Amount</th>
                                            <th>Maintence and Repair</th>
                                            <th>Salaries</th>
                                            <th>Medical Expenses</th>
                                            <th>Employee Benefit Programs</th>
                                            <th>Note</th>
                                           

                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php
                                            $sql = "SELECT `id`, `from_date`, `to_date`, `utility`, `rent`, `travel`, `emp_loan`, `others`, `amount`, `maintence`, `salary`, `medical`, `emp_benefit`, `note` FROM `internal_expense` ";
                                            $result = $link->query($sql);

                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                    
                                                    echo "<tr>\n";
                                                    echo "    <td>".$row["from_date"]."</td>\n";
                                                    echo "    <td>".$row["to_date"]."</td>\n";
                                                    echo "    <td>".$row["utility"]."</td>\n";
                                                    echo "    <td>".$row["rent"]."</td>\n";
                                                    echo "    <td>".$row["travel"]."</td>\n";
                                                    echo "    <td>".$row["emp_loan"]."</td>\n";
                                                    echo "    <td>".$row["others"]."</td>\n";
                                                    echo "    <td>".$row["amount"]."</td>\n";
                                                    echo "    <td>".$row["maintence"]."</td>\n";
                                                    echo "    <td>".$row["salary"]."</td>\n";
                                                    echo "    <td>".$row["medical"]."</td>\n";
                                                    echo "    <td>".$row["emp_benefit"]."</td>\n";
                                                    echo "    <td>".$row["note"]."</td>\n";
                                                    


                                                    // echo "    <td>".$row["attachment"]."</td>\n";
                                                  //  echo "    <td> <a href='./uploads/".$row["attachment"]."' download>Attacment</a></td>\n";
                                                    echo "    <td><button id='delExIng' class='btn btn-danger' data-id='".$row['id']."'>Delete</button></td>\n";

                                                    echo "</tr>\n";
                                                }
                                            }
                                            $link->close();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end cardaa -->
                    </div> <!-- end col -->
                </div> <!-- end row -->