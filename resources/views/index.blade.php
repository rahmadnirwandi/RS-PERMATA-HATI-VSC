<!DOCTYPE html>
<html lang="en">
@extends('layouts/main')
@section('title','RS PERMATA HATI');
@section('container')

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">RS PERMATA HATI</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light">Kami siap <span class="color">Melayani Anda</span> Dengan Sepenuh Hati</h4>
					</div>
						<div class="well well-trans">
						<div class="wow fadeInRight" data-wow-delay="0.1s">

						<ul class="lead-list">
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>HIDUP SEHAT</strong><br />Mari buat hidupmu lebih bahagia</span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>MANFAATKAN KESEHATAN ANDA</strong><br />Jangan sampai waktu anda bersama keluarga menjadi terganggu</span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>JADIKAN KAMI SAHABAT ANDA</strong><br />Kami usahakan yang terbaik untuk anda</span></li>
						</ul>

						</div>
						</div>


					</div>
					<div class="col-lg-6">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Buat Janji / Booking</small></h3>
									</div>
									<div class="panel-body">
									<form role="form" class="lead">
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													
													<input type="text" name="first_name" placeholder="Nama" id="first_name" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													
													<input type="text" name="last_name" placeholder="Alamat" id="last_name" class="form-control input-md">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													
													<input type="email" name="email" placeholder="Email" id="email" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													
													<input type="text" name="phone" placeholder="Nomor Telephone" id="phone" class="form-control input-md">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													
													<input type="date" name="email" id="email" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Poliklinik">
                                                    <datalist id="datalistOptions">
                                                        <option value="Poliklinik Bedah">
                                                        <option value="Poliklinik Anak">
                                                        <option value="Poliklinik Penyakit Dalam">
                                                        <option value="Poliklinik Ortopedi">
                                                        <option value="Poliklinik Kulit & Kelamin">
                                                    </datalist>
                                            </div>	
										</div>
										</div>
										<input type="submit" value="Kirim" class="btn btn-skin btn-block btn-lg">
										<input type="button" value="Masuk" class="btn btn-primary btn-block btn-lg">
									</form>
								</div>
							</div>				
						
						</div>
						</div>
					</div>					
				</div>		
			</div>
		</div>		
    </section>
	
	<!-- /Section: intro -->

	<!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Dokter Kami</h2>
					<p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				
            <div id="filters-container" class="cbp-l-filters-alignLeft">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".cardiologist" class="cbp-filter-item">Cardiologist (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".psychiatrist" class="cbp-filter-item">Psychiatrist (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".neurologist" class="cbp-filter-item">Neurologist (<div class="cbp-filter-counter"></div>)</div>
            </div>
		
            <div id="grid-container" class="cbp-l-grid-team">
                <ul>
                    <li class="cbp-item psychiatrist">
                        <a href="backend/doctors/member1.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="backend/img/team/1.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="backend/doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Alice Grue</a>
                        <div class="cbp-l-grid-team-position">Psychiatrist</div>
                    </li>
                    <li class="cbp-item cardiologist">
                        <a href="backend/doctors/member2.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="backend/img/team/2.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="backend/doctors/member2.html" class="cbp-singlePage cbp-l-grid-team-name">Joseph Murphy</a>
                        <div class="cbp-l-grid-team-position">Cardiologist</div>
                    </li>
                    <li class="cbp-item cardiologist">
                        <a href="backend/doctors/member3.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="backend/img/team/3.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="backend/doctors/member3.html" class="cbp-singlePage cbp-l-grid-team-name">Alison Davis</a>
                        <div class="cbp-l-grid-team-position">Cardiologist</div>
                    </li>
                    <li class="cbp-item neurologist">
                        <a href="backend/doctors/member4.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="backend/img/team/4.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="backend/doctors/member4.html" class="cbp-singlePage cbp-l-grid-team-name">Adam Taylor</a>
                        <div class="cbp-l-grid-team-position">Neurologist</div>
                    </li>

                </ul>
            </div>
			</div>
			</div>
		</div>

	</section>
	<!-- /Section: team -->

	<!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Our facilities</h2>
					<p>Ea melius ceteros oportere quo, pri habeo viderer facilisi ei</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

	<div class="container">
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div id="owl-works" class="owl-carousel">
                        <div class="item"><a href="backend/img/photo/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="backend/img/photo/1.jpg" class="img-responsive" alt="img"></a></div>
                        <div class="item"><a href="backend/img/photo/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg"><img src="backend/img/photo/2.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="backend/img/photo/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="backend/img/photo/3.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="backend/img/photo/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="backend/img/photo/4.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="backend/img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/5@2x.jpg"><img src="backend/img/photo/5.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="backend/img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/6@2x.jpg"><img src="backend/img/photo/6.jpg" class="img-responsive " alt="img"></a></div>
                    </div>
					</div>
                </div>
            </div>
		</div>
	</section>
	<!-- /Section: works -->

	<section id="tentangkami" class="home-section paddingtop-60">	
        <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="callaction bg-gray">
							<div class="row">
								<div class="col-md-8">
									<div class="wow fadeInUp" data-wow-delay="0.1s">
									<div class="cta-text">
									<h3>Selamat datang di pusat Kesehatan Anda</h3>
									<p>Memberikan pelayanan yang terbaik untuk kesehatan anda</p>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
	</section>	
	

	<!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

		<div class="container">

        <div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
				<img src="backend/img/dummy/img-1.jpg" class="img-responsive" alt="" />
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				
				<div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-stethoscope fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Medical checkup</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
					</div>
                </div>
				</div>
				
				<div class="wow fadeInRight" data-wow-delay="0.2s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-wheelchair fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Nursing Services</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
					</div>
                </div>
				</div>
				<div class="wow fadeInRight" data-wow-delay="0.3s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-plus-square fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Pharmacy</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
					</div>
                </div>
				</div>


            </div>
			<div class="col-sm-3 col-md-3">
				
				<div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-h-square fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Gyn Care</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
					</div>
                </div>
				</div>
				
				<div class="wow fadeInRight" data-wow-delay="0.2s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-filter fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Neurology</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
					</div>
                </div>
				</div>
				<div class="wow fadeInRight" data-wow-delay="0.3s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-user-md fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Sleep Center</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
					</div>
                </div>
				</div>

            </div>
			
        </div>		
		</div>
	</section>
	<!-- /Section: services -->	
	
	<section id="partner" class="home-section paddingbot-60">	
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Our partner</h2>
					<p>Take charge of your health today with our specially designed health packages</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>
		
           <div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="backend/#"><img src="backend/img/dummy/partner-1.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="backend/#"><img src="backend/img/dummy/partner-2.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="backend/#"><img src="backend/img/dummy/partner-3.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="backend/#"><img src="backend/img/dummy/partner-4.jpg" alt="" /></a>
						</div>
					</div>
				</div>
            </div>
	</section>	

	<footer>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>About Medicio</h5>
						<p>
						Lorem ipsum dolor sit amet, ne nam purto nihil impetus, an facilisi accommodare sea
						</p>
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Information</h5>
						<ul>
							<li><a href="backend/#">Home</a></li>
							<li><a href="backend/#">Laboratory</a></li>
							<li><a href="backend/#">Medical treatment</a></li>
							<li><a href="backend/#">Terms & conditions</a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Medicio center</h5>
						<p>
						Nam leo lorem, tincidunt id risus ut, ornare tincidunt naqunc sit amet.
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Saturday, 8am to 10pm
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +62 0888 904 711
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> hello@medicio.com
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Our location</h5>
						<p>The Suithouse V303, Kuningan City, Jakarta Indonesia 12940</p>		
						
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="backend/#"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="backend/#"><i class="fa fa-twitter"></i></a></li>
								<li class="social-google"><a href="backend/#"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-vimeo"><a href="backend/#"><i class="fa fa-vimeo-square"></i></a></li>
								<li class="social-dribble"><a href="backend/#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright 2015 - Medicio. All rights reserved.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<p><a href="backend/http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste</p>
					</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Medicio
                    -->
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>
@endsection

</html>
