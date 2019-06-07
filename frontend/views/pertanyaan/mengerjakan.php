


<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">FIND YOUR PERSONALITY</h6>
				</div>
				<div class="ui-block-content">
          <form action="hitung" method="get">
          <?php $nomer=0; ?>
          <?php foreach ($dataPertanyaan as $nilai) { ?>
              <br><?php echo $nilai["IDPERTANYAAN"]; ?><br>
              <?php echo $nilai["PERTANYAAN"]; ?>
              <?php for ($i=1; $i < 5; $i++) { ?>
                <br><input type="radio" name="jawaban<?php echo $nomer; ?>" value="<?php echo $i; ?>"><?php echo $nilai["PILIHAN$i"]; ?>
              <?php } ?>
              <?php $nomer++; ?>
          <?php } ?>
          <input type="submit" value="Submit" class="btn btn-primary btn-md">

          </form>
				</div>
			</div>

			<!-- <div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Button Versions</h6>
				</div>
				<div class="ui-block-content">
					<div class="row">
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-primary btn-lg">Big Button</a>
							<a href="#" class="btn btn-primary btn-md">Medium Button</a>
							<a href="#" class="btn btn-primary btn-md-2">Medium Button V2</a>
							<a href="#" class="btn btn-primary btn-sm">Small Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-secondary btn-lg">Big Button</a>
							<a href="#" class="btn btn-secondary btn-md">Medium Button</a>
							<a href="#" class="btn btn-secondary btn-md-2">Medium Button V2</a>
							<a href="#" class="btn btn-secondary btn-sm">Small Button</a>
						</div>
					</div>
					<div class="row">
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-purple btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-blue btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-breez btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-green btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-grey btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-grey-light btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-grey-lighter btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-breez-light btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-yellow btn-lg">Big Button</a>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-12">
							<a href="#" class="btn btn-smoke btn-lg btn-light-bg">Big Button</a>
						</div>
					</div>
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Form Elements</h6>
				</div>
				<div class="ui-block-content">
					<div class="row">
						<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="form-group label-floating is-empty">
								<label class="control-label">Default Input</label>
								<input class="form-control" type="text" placeholder="">
							</div>
							<div class="form-group label-floating has-success">
								<label class="control-label">Success Input</label>
								<input type="text" class="form-control form-control-success">
							</div>
							<div class="form-group label-floating has-error">
								<label class="control-label">Error Input</label>
								<input type="text" class="form-control form-control-danger">
							</div>
							<fieldset disabled>
								<div class="form-group has-disabled">
									<input type="text" class="form-control" placeholder="Disabled input">
								</div>
							</fieldset>

							<label class="control-label">Dropdown Field</label>
							<fieldset class="form-group">
								<select class="selectpicker form-control">
									<option value="AL">Alabama</option>
									<option value="2">Oklahoma</option>
									<option value="WY">Wyoming</option>
								</select>
							</fieldset>

							<h6>Completed Input V2</h6>
							<div class="form-group">
								<input class="form-control" type="text" placeholder="James Spiegel">
							</div>

							<div class="form-group with-icon label-floating is-empty">
								<label class="control-label">Input with Icon</label>
								<input class="form-control" type="text">
								<i class="fab fa-facebook-f c-facebook" aria-hidden="true"></i>
							</div>

							<label class="control-label">Calendar Field</label>
							<div class="form-group date-time-picker">
								<input type="text" name="datetimepicker" value="10/24/1984"/>
								<span class="input-group-addon">
									<svg class="olymp-month-calendar-icon icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-month-calendar-icon"></use></svg>
								</span>
							</div>

							<h6>Switch On</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>

							<div class="togglebutton">
								<label>
									<input type="checkbox" checked="">
								</label>
							</div>

							<h6>Switch Off</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							<div class="togglebutton">
								<label>
									<input type="checkbox">
								</label>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
							<h6>Checkboxes</h6>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="optionsCheckboxes">
									Unchecked
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="optionsCheckboxes" checked>
									Checked
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="optionsCheckboxes" disabled>
									Disabled Unchecked
								</label>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="optionsCheckboxes" disabled checked>
									Disabled Checked
								</label>
							</div>
						</div>
						<div class="col col-lg-4 col-md-4 col-sm-12 col-12">
							<h6>Radio Buttons</h6>

							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios">
									Radio is off
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" checked>
									Radio is on
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadiosDisabled" disabled>
									Disabled Radio is off
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadiosDisabled" checked disabled>
									Disabled Radio is on
								</label>
							</div>

						</div>

						<div class="col col-lg-4 col-md-4 col-sm-12 col-12">

							<h6>Tooltips</h6>
							<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
								Tooltip on top
							</button>
							<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
								Tooltip on right
							</button>
							<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
								Tooltip on left
							</button>
							<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
								Tooltip on bottom
							</button>
						</div>

					</div>

					<div class="row mb30">
						<div class="col col-lg-12">
							<h6>Upload Buttons</h6>
						</div>
						<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="file-upload">
								<label for="upload" class="file-upload__label">Upload Button</label>
								<input id="upload" class="file-upload__input" type="file" name="file-upload">
							</div>
						</div>
						<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="file-upload">
								<label for="upload" class="file-upload__label bg-blue">Upload Button</label>
								<input id="upload3" class="file-upload__input" type="file" name="file-upload">
							</div>
						</div>
						<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="file-upload">
								<label for="upload" class="file-upload__label bg-breez">Upload Button</label>
								<input id="upload1" class="file-upload__input" type="file" name="file-upload">
							</div>
						</div>
						<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="file-upload">
								<label for="upload" class="file-upload__label bg-green">Upload Button</label>
								<input id="upload2" class="file-upload__input" type="file" name="file-upload">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col col-lg-12">
							<h6>Quantity Input Field</h6>
						</div>

						<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="input-group number-spinner">
								<span class="input-group-btn data-dwn input-group-prepend">
									<button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
								</span>
								<input type="text" class="form-control text-center" value="1" min="0" max="100">
								<span class="input-group-btn data-up input-group-append">
									<button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
								</span>
							</div>
						</div>

						<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="input-group number-spinner number-spinner--secondary">
								<span class="input-group-btn data-dwn input-group-prepend">
									<button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
								</span>
								<input type="text" class="form-control text-center" value="-10" min="-50" max="50">
								<span class="input-group-btn data-up input-group-append">
									<button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
								</span>
							</div>
						</div>

						<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="input-group number-spinner number-spinner--breez">
								<span class="input-group-btn data-dwn input-group-prepend">
									<button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
								</span>
								<input type="text" class="form-control text-center" value="10" min="-40" max="40">
								<span class="input-group-btn data-up input-group-append">
									<button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
								</span>
							</div>
						</div>

						<div class="col col-lg-3 col-md-3 col-sm-12 col-12">
							<div class="input-group number-spinner number-spinner--green">
								<span class="input-group-btn data-dwn input-group-prepend">
									<button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
								</span>
								<input type="text" class="form-control text-center" value="5" min="0" max="10">
								<span class="input-group-btn data-up input-group-append">
									<button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Forms Validated</h6>
				</div>
				<div class="ui-block-content">
					<form class="needs-validation" novalidate>
						<div class="crumina-module crumina-heading with-title-decoration">
							<h5 class="heading-title">Form</h5>
						</div>

						<div class="row">
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">First Name</label>
									<input class="form-control" type="text" placeholder="" value="" required>
									<div class="invalid-feedback">
										<div class="error-box">
											<div class="danger"><svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg></div>
											<h5 class="title">Error Box</h5>
											<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et lorem.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Last Name</label>
									<input class="form-control" type="text" placeholder="" value="Spiegel" required>
									<div class="invalid-feedback">
										<div class="error-box">
											<div class="danger"><svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg></div>
											<h5 class="title">Error Box</h5>
											<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et lorem.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Email</label>
									<input class="form-control" type="email" placeholder="" value="jspiegel@yourmail.com" required>
									<div class="invalid-feedback">
										<div class="error-box">
											<div class="danger"><svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg></div>
											<h5 class="title">Error Box</h5>
											<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et lorem.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="form-group">
									<input class="form-control" type="tel" placeholder="Phone Number" required>
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Select your Country</label>
									<select class="selectpicker form-control">
										<option value="US">United States</option>
										<option value="AR">Argentina</option>
									</select>
								</div>
							</div>
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Select Your State</label>
									<select class="selectpicker form-control">
										<option value="CA">California</option>
										<option value="AR">Arizona</option>
									</select>
								</div>
							</div>
							<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<div class="form-group">
									<input class="form-control" placeholder="Zip Code" type="text" required>
								</div>
							</div>

							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Your Address" required>
								</div>

								<div class="form-group">
									<input class="form-control" type="text" placeholder="Apartment Number / Suite" required>
								</div>

								<div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes" required>
										Ship to a differnt address
									</label>
								</div>

								<button class="btn btn-md btn-primary" type="submit">Submit form</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ...end Main Content -->
 -->
