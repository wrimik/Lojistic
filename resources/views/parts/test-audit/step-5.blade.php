<div class="step animated results">
    <div class="tab-controls btn-group step-controls">
        <div class="btn btn-lg">FINDINGS</div>
        <div class="btn btn-lg flatGrey hidden">DETAILS</div>
        <div class="btn btn-lg flatGrey hidden draw-charges">CHARTS</div>
        <div class="btn btn-lg flatGrey hidden">STATS</div>
    </div>
    <div class="more-findings">
        <br>
        <span class="flatGrey">
            Note: Audisee highlights a portion of the recoverable items
            found by <br>the actual Parcel Audit Services provided by Lojistic.
            This is simply a preview.
        </span>
    </div>
    <div class="tabs">
        <div class="tab">
            <div id="audit-cards">
                <div v-for="point in points" class="card result-total fw-thin">
                    <div class="panel-trim brightBlue"></div>
                    <span class="info" title="@{{ point.description }}" data-toggle="tooltip" data-placement="left">i</span>

                    <div class="card-content">
                        <div class="col-xs-12">
                            <span v-text="point.name" class="audit-point fs-24"></span>
                        </div>
                        <div class="col-xs-4 fs-12">
                            <span data-animate-to="@{{ count($key) }}" class="number fs-20">0</span><br/>
                            found
                        </div>
                        <div class="col-xs-8 fs-12 text-right">
                            $<span data-animate-to="@{{ pointTotal($key) }}" class="currency fs-20">0.00</span><br/>
                            potential recovery
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    end findings  -->
        <!--  details  -->
        <div class="tab">
            <div class="card fw-thin audit-details">
                <div class="panel-trim brightBlue"></div>
                <div class="card-content">
                    <h3>
                        <select v-model="selected_point" class="form-control" id="point-select">
                            <option
                                    v-for="point in pointsWithFindings"
                                    v-if="count(point.audit_point) > 0"
                                    value="@{{ point.audit_point }}">
                                @{{ points[point.audit_point].name }}
                            </option>
                        </select>
                        <span class="fs-20 details-title">
                            Potentially Recoverable Charges
                        </span>
                    </h3>
                    <hr class="slim">
                    <div id="tracking-numbers" class="details">
                        <div v-for="finding in selected_findings" class="detail">
                            <div>@{{ finding.charge_amount | currency}}</div>
                            <div><a target="_blank" href="@{{ tracking_url + finding.tracking_id }}">@{{ finding.tracking_id }}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  end details  -->
        <!--  charts -->
        <div class="tab">
            <div id="charges-chart"></div>
        </div>
        <!--  stats  -->
        <div class="tab">
            <div class="card fw-thin audit-stats">
                <div class="panel-trim brightBlue"></div>
                <div class="card-content">
                        <h3 class="text-center">Stats</h3>
                        <hr class="slim">
                    <div class="col-sm-8">
                        <table class="comparison-table">
                            <thead>
                            <tr>
                                <th>Details</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Carrier</td>
                                <td v-text="carrier_name"></td>
                            </tr>
                            <tr>
                                <td>Total Records</td>
                                <td v-text="total_records | number"></td>
                            </tr>
                            <tr>
                                <td>Total Shipments Audited</td>
                                <td v-text="total_shipments | number"></td>
                            </tr>
                            <!-- tr>
                                <td>Shipment Date Range</td>
                                <td>@{{ shipment_range.start }} - @{{ shipment_range.end }}</td>
                            </tr>
                            <tr>
                                <td>Invoice Date Range</td>
                                <td>@{{ invoice_range.start }} - @{{ invoice_range.end }}</td>
                            </tr -->
                            <tr>
                                <td>Dollar Amount Audited</td>
                                <td v-text="total_dollars_audited | currency"></td>
                            </tr>
                            <tr>
                                <td>Potential Recovery</td>
                                <td v-text="total_recovery | currency"></td>
                            </tr>
                            <tr>
                                <td>Potential Recovery As % Of Spend</td>
                                <td>@{{ (recovery_percent).toFixed(2) }}%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-4" style="max-height:544px;">
                        <table class="comparison-table">
                            <thead>
                            <tr>
                                <th>Invoices Audited</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="invoice in invoice_details.slice(0, 7)">
                                <td>@{{ invoice.invoice_number }}</td>
                            </tr>
                            <tr v-if="invoice_details.length == 8">
                                <td>@{{ invoice.invoice_details[8] }}</td>
                            </tr>
                            <tr v-if="invoice_details.length > 8">
                                <td class="text-center"><b>And @{{ invoice_details.length - 7 }} More</b></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <hr class="slim white">
                </div>
            </div>
        </div>
        <!--  end details  -->
    </div>
</div>
<div id="audit-share" class="transition pending hidden">
    <div class="open">&#9664;</div>
    <div class="close">&minus;</div>
    Share or Re-Visit: <br/>
    <input class="form-control" id="revisit-link" type="text" data-base="http://www.lojistic.com/audit/" value=""/>
</div>