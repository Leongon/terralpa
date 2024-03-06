
<?php
headerAdmin($data);
?>

<div class="mobile-menu-overlay"></div>

<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					
				<div id="chart">
            <apexchart width="500" type="line" :options="options" :series="series"></apexchart>
        </div>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Timestamp</th>
                    <th scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, index) in series[0].data">
                    <th scope="row">{{index+1}}</th>
                    <td>{{item[0]}}</td>
                    <td>{{item[1]}}</td>
                </tr>
            </tbody>
        </table>
				</div>
			</div>
		</div>

	
<?php
footerAdmin($data);
?>
