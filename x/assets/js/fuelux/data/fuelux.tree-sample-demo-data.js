var DataSourceTree = function(options) {
	this._data 	= options.data;
	this._delay = options.delay;
}

DataSourceTree.prototype.data = function(options, callback) {
	var self = this;
	var $data = null;

	if(!("name" in options) && !("type" in options)){
		$data = this._data;//the root tree
		callback({ data: $data });
		return;
	}
	else if("type" in options && options.type == "folder") {
		if("additionalParameters" in options && "children" in options.additionalParameters)
			$data = options.additionalParameters.children;
		else $data = {}//no data
	}
	
	if($data != null)//this setTimeout is only for mimicking some random delay
		setTimeout(function(){callback({ data: $data });} , parseInt(Math.random() * 500) + 200);

	//we have used static data here
	//but you can retrieve your data dynamically from a server using ajax call
	//checkout examples/treeview.html and examples/treeview.js for more info
};

var tree_data = {
	'for-sale' : {name: 'For Sale', type: 'folder'}	,
	'vehicles' : {name: 'Vehicles', type: 'folder'}	,
	'rentals' : {name: 'Rentals', type: 'folder'}	,
	'real-estate' : {name: 'Real Estate', type: 'folder'}	,
	'pets' : {name: 'Pets', type: 'folder'}	,
	'tickets' : {name: 'Tickets', type: 'item'}	,
	'services' : {name: 'Services', type: 'item'}	,
	'personals' : {name: 'Personals', type: 'item'}
}
tree_data['for-sale']['additionalParameters'] = {
	'children' : {
		'appliances' : {name: 'Appliances', type: 'item'},
		'arts-crafts' : {name: 'Arts & Crafts', type: 'item'},
		'clothing' : {name: 'Clothing', type: 'item'},
		'computers' : {name: 'Computers', type: 'item'},
		'jewelry' : {name: 'Jewelry', type: 'item'},
		'office-business' : {name: 'Office & Business', type: 'item'},
		'sports-fitness' : {name: 'Sports & Fitness', type: 'item'}
	}
}
tree_data['vehicles']['additionalParameters'] = {
	'children' : {
		'cars' : {name: 'Cars', type: 'folder'},
		'motorcycles' : {name: 'Motorcycles', type: 'item'},
		'boats' : {name: 'Boats', type: 'item'}
	}
}
tree_data['vehicles']['additionalParameters']['children']['cars']['additionalParameters'] = {
	'children' : {
		'classics' : {name: 'Classics', type: 'item'},
		'convertibles' : {name: 'Convertibles', type: 'item'},
		'coupes' : {name: 'Coupes', type: 'item'},
		'hatchbacks' : {name: 'Hatchbacks', type: 'item'},
		'hybrids' : {name: 'Hybrids', type: 'item'},
		'suvs' : {name: 'SUVs', type: 'item'},
		'sedans' : {name: 'Sedans', type: 'item'},
		'trucks' : {name: 'Trucks', type: 'item'}
	}
}

tree_data['rentals']['additionalParameters'] = {
	'children' : {
		'apartments-rentals' : {name: 'Apartments', type: 'item'},
		'office-space-rentals' : {name: 'Office Space', type: 'item'},
		'vacation-rentals' : {name: 'Vacation Rentals', type: 'item'}
	}
}
tree_data['real-estate']['additionalParameters'] = {
	'children' : {
		'apartments' : {name: 'Apartments', type: 'item'},
		'villas' : {name: 'Villas', type: 'item'},
		'plots' : {name: 'Plots', type: 'item'}
	}
}
tree_data['pets']['additionalParameters'] = {
	'children' : {
		'cats' : {name: 'Cats', type: 'item'},
		'dogs' : {name: 'Dogs', type: 'item'},
		'horses' : {name: 'Horses', type: 'item'},
		'reptiles' : {name: 'Reptiles', type: 'item'}
	}
}

var treeDataSource = new DataSourceTree({data: tree_data});
var ace_icon = ace.vars['icon'];
//class="'+ace_icon+' fa fa-file-text grey"
//becomes
//class="ace-icon fa fa-file-text grey"
var tree_data_2 = {
	'master' : {name: 'master', type: 'folder', 'icon-class':'red'}	,
	'setup' : {name: 'setup', type: 'folder', 'icon-class':'orange'}	,
	'transaksi' : {name: 'transaksi', type: 'folder', 'icon-class':'blue'}	,
	'laporan' : {name: 'laporan', type: 'folder', 'icon-class':'green'}	,
	'proses' : {name: 'proses', type: 'folder'}	,
	'laporan2' : {name: '<i class="'+ace_icon+' fa fa-file-text grey"></i> laporan2', type: 'item'},
	'tools' : {name: '<i class="'+ace_icon+' fa fa-book blue"></i> tools', type: 'item'}
}
tree_data_2['setup']['additionalParameters'] = {
	'children' : [
		{name: '<i class="'+ace_icon+' fa fa-music blue"></i> saldo awal', type: 'item'}	
	]
}
tree_data_2['transaksi']['additionalParameters'] = {
	'children' : [
		{name: '<i class="'+ace_icon+' fa fa-film blue"></i> jurnal umum', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-film blue"></i> jurnal penyesuaian', type: 'item'}
	]
}
tree_data_2['master']['additionalParameters'] = {
	'children' : {
		'nama_usaha' : {name: 'nama usaha', type: 'folder', 'icon-class':'pink'},
		'informasi_pajak_perusahaan' : {name: 'informasi pajak', type: 'folder', 'icon-class':'pink'},
		'perkiraan' : {name: 'perkiraan', type: 'folder', 'icon-class':'pink'},
		'periode' : {name: 'periode', type: 'folder', 'icon-class':'pink'}
	}
}
tree_data_2['master']['additionalParameters']['children']['nama_usaha']['additionalParameters'] = {
	'children' : [
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> wallpaper1.jpg', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> wallpaper2.jpg', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> wallpaper3.jpg', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> wallpaper4.jpg', type: 'item'}
	]
}
tree_data_2['master']['additionalParameters']['children']['informasi_pajak_perusahaan']['additionalParameters'] = {
	'children' : [
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> photo1.jpg', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> photo2.jpg', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> photo3.jpg', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> photo4.jpg', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> photo5.jpg', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> photo6.jpg', type: 'item'}
	]
}

tree_data_2['master']['additionalParameters']['children']['perkiraan']['additionalParameters'] = {
	'children' : [
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> photo1.jpg', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> photo2.jpg', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> photo3.jpg', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> photo4.jpg', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> photo5.jpg', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> photo6.jpg', type: 'item'}
	]
}


tree_data_2['laporan']['additionalParameters'] = {
	'children' : {
		'jurnal' : {name: 'jurnal', type: 'folder', 'icon-class':'pink'},
		'buku_besar' : {name: 'buku_besar', type: 'folder', 'icon-class':'pink'},
		'neraca_saldo' : {name: 'neraca_saldo', type: 'folder', 'icon-class':'pink'},
		'neraca_lajur' : {name: 'neraca_lajur', type: 'folder', 'icon-class':'pink'},
		'laba_rugi' : {name: 'laba_rugi', type: 'folder', 'icon-class':'pink'},
		'periode_equitas' : {name: 'periode_equitas', type: 'folder', 'icon-class':'pink'},
		'neraca' : {name: 'neraca', type: 'folder', 'icon-class':'pink'},
		'catatan_lap_keuanagan' : {name: 'cat lap keu', type: 'folder', 'icon-class':'pink'}
	}
}

tree_data_2['laporan']['additionalParameters']['children']['jurnal']['additionalParameters'] = {
	'children' : [
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> jurnal umum', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> jurnal peenyesuaian', type: 'item'},
		
	]
}

tree_data_2['laporan']['additionalParameters']['children']['buku_besar']['additionalParameters'] = {
	'children' : [
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> jurnal umum', type: 'item'},
		{name: '<i class="'+ace_icon+' fa fa-picture-o green"></i> jurnal peenyesuaian', type: 'item'},
		
	]
}

tree_data_2['proses']['additionalParameters'] = {
	'children' : [
		{name: '<i class="'+ace_icon+' fa fa-archive brown"></i> posting periode', type: 'item'}
	]
}
var treeDataSource2 = new DataSourceTree({data: tree_data_2});