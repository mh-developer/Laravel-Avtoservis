<div class="container mt-5" id="width_change">
    <div class="jumbotron-fluid rounded-20 bg-white pb-2">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTableForExcel">
                <thead>
                    <tr>
                        <th scope="col">Inventarna</th>
                        <th scope="col">Oddelek</th>
                        <th scope="col">Uporabnik</th>
                        <th scope="col">Ime rač.</th>
                        <th scope="col">Naziv</th>
                        <th scope="col">Datum spremembe na IT</th>
                        <th scope="col">Izvajalec</th>
                        <th scope="col">Opis problema</th>
                        <th scope="col">Opis posega</th>
                        <th scope="col" class="hiddenCol">
                            <button type="button" id="viewPort" class="btn btn-primary btn-sm topBarCreate ml-lg-4" data-tippy="Širina">
                                <i class="material-icons">code</i>
                            </button>
                        </th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td scope="row">asdfasd</td>
                            <td>asdfasd</td>
                            <td>asdfasd</td>
                            <td>asdfasd</td>
                            <td>asdfasd</td>
                            <td>asdfasd</td>
                            <td>asdfasd</td>
                            <td>asdfasd</td>
                            <td>asdfasd</td>
                                <td width="150" class="hiddenCol">
                                    <div class="d-inline-block uporavljanje_posega">
                                        <button type="button" class="btn btn-warning topBarCreate my-1 my-lg-0 poseg_edit_@item.Poseg_ID" data-toggle="modal" data-target=".crud_form_modal_poseg_@item.Poseg_ID" data-tippy="Uredi">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        {{-- @if (Model._Prijavljen_Uporabnik.Pravice.Koda_pravice == "ADMIN")
                                        {
                                            <button type="button" class="btn btn-danger topBarCreate my-1 my-lg-0" data-toggle="modal" data-target=".delet_poseg_@item.Poseg_ID" data-tippy="Zbriši">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        } --}}
                                    </div>

                                    <div class="modal fade bd-example-modal-lg crud_form_modal_poseg_@item.Poseg_ID" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg" role="document">
                                            asdf
                                        </div>
                                    </div>



                                    {{-- @if (Model._Prijavljen_Uporabnik.Pravice.Koda_pravice == "ADMIN")
                                    {
                                        <!-- Small modal -->
                                        <div class="modal fade delet_poseg_@item.Poseg_ID" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Odstrani poseg</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Želite izbrisati poseg
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Prekliči</button>
                                                        @using (Html.BeginForm("Delete", "Poseg", new { ReturnUrl = ViewBag.ReturnUrl, id = item.Poseg_ID }, FormMethod.Post, new { role = "form" }))
                                                        {
                                                            @Html.AntiForgeryToken()
                                                            <input type="submit" class="btn btn-primary" value="Potrdi" />
                                                        }
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    } --}}
                                </td>
                        </tr>
                </tbody>
            </table>
        </div>


        {{-- @*Page @(Model.PageCount < Model.PageNumber ? 0 : Model.PageNumber) of @Model.PageCount*@

        <div class="ml-3 mt-2">
            @Html.PagedListPager(Model._Posegi_List, page => Url.Action("Index", new { page, sortOrder = ViewBag.CurrentSort, currentFilter = ViewBag.CurrentFilter }))
        </div> --}}
    </div>
</div>
