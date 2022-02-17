<?php

namespace App\Models\Administrator;

use CodeIgniter\Model;

class SidebarMenuModel extends Model
{
	protected $sidebarMenuMultilevel = [
		[
			'id'     => '1',
			'name'   => 'Beranda',
			'class'  => '',
			'link'   => 'home',
			'icon'   => 'fas fa-fw fa-home',
			'parent' => '0',
			'child'  => []
		],
		[
			'id'     => '2',
			'name'   => 'HTML dan CSS',
			'class'  => 'dropdown',
			'link'   => '#',
			'icon'   => 'far fa-fw fa-folder',
			'parent' => '0',
			'child'  => []
		],
		[
			'id'     => '3',
			'name'   => 'JavaScript',
			'class'  => 'dropdown',
			'link'   => '#',
			'icon'   => 'far fa-fw fa-folder',
			'parent' => '0',
			'child'  => []
		],
		[
			'id'     => '4',
			'name'   => 'Server Side',
			'class'  => 'dropdown',
			'link'   => '#',
			'icon'   => 'far fa-fw fa-folder',
			'parent' => '0',
			'child'  => []
		],
		[
			'id'     => '5',
			'name'   => 'XML',
			'class'  => 'dropdown',
			'link'   => '#',
			'icon'   => 'far fa-fw fa-folder',
			'parent' => '0',
			'child'  => []
		],
		[
			'id'     => '6',
			'name'   => 'Pengaturan',
			'class'  => '',
			'link'   => 'settings',
			'icon'   => 'fas fa-fw fa-cog',
			'parent' => '0',
			'child'  => []
		],
		[
			'id'     => '7',
			'name'   => 'Keluar',
			'class'  => '',
			'link'   => 'logout',
			'icon'   => 'fas fa-fw fa-sign-out-alt',
			'parent' => '0',
			'child'  => []
		],
		[
			'id'     => '21',
			'name'   => 'HTML',
			'class'  => '',
			'link'   => 'htmlCss/html',
			'icon'   => '',
			'parent' => '2',
			'child'  => []
		],
		[
			'id'     => '22',
			'name'   => 'CSS',
			'class'  => '',
			'link'   => 'htmlCss/css',
			'icon'   => '',
			'parent' => '2',
			'child'  => []
		],
		[
			'id'     => '23',
			'name'   => 'Colors',
			'class'  => '',
			'link'   => 'htmlCss/colors',
			'icon'   => '',
			'parent' => '2',
			'child'  => []
		],
		[
			'id'     => '24',
			'name'   => 'Bootstrap',
			'class'  => 'dropdown',
			'link'   => '#',
			'icon'   => '',
			'parent' => '2',
			'child'  => []
		],
		[
			'id'     => '25',
			'name'   => 'Icons',
			'class'  => 'dropdown',
			'link'   => '#',
			'icon'   => '',
			'parent' => '2',
			'child'  => []
		],
		[
			'id'     => '26',
			'name'   => 'Graphics',
			'class'  => '',
			'link'   => 'htmlCss/graphics',
			'icon'   => '',
			'parent' => '2',
			'child'  => []
		],
		[
			'id'     => '31',
			'name'   => 'JavaScript',
			'class'  => '',
			'link'   => 'javascript/javascript',
			'icon'   => '',
			'parent' => '3',
			'child'  => []
		],
		[
			'id'     => '32',
			'name'   => 'jQuery',
			'class'  => '',
			'link'   => 'javascript/jquery',
			'icon'   => '',
			'parent' => '3',
			'child'  => []
		],
		[
			'id'     => '33',
			'name'   => 'AngularJS',
			'class'  => '',
			'link'   => 'javascript/angularjs',
			'icon'   => '',
			'parent' => '3',
			'child'  => []
		],
		[
			'id'     => '34',
			'name'   => 'JSON',
			'class'  => '',
			'link'   => 'javascript/json',
			'icon'   => '',
			'parent' => '3',
			'child'  => []
		],
		[
			'id'     => '35',
			'name'   => 'AJAX',
			'class'  => '',
			'link'   => 'javascript/ajax',
			'icon'   => '',
			'parent' => '3',
			'child'  => []
		],
		[
			'id'     => '41',
			'name'   => 'SQL',
			'class'  => '',
			'link'   => 'serverSide/sql',
			'icon'   => '',
			'parent' => '4',
			'child'  => []
		],
		[
			'id'     => '42',
			'name'   => 'PHP',
			'class'  => '',
			'link'   => 'serverSide/php',
			'icon'   => '',
			'parent' => '4',
			'child'  => []
		],
		[
			'id'     => '43',
			'name'   => 'Python',
			'class'  => '',
			'link'   => 'serverSide/python',
			'icon'   => '',
			'parent' => '4',
			'child'  => []
		],
		[
			'id'     => '44',
			'name'   => 'Java',
			'class'  => '',
			'link'   => 'serverSide/java',
			'icon'   => '',
			'parent' => '4',
			'child'  => []
		],
		[
			'id'     => '45',
			'name'   => 'ASP',
			'class'  => '',
			'link'   => 'serverSide/asp',
			'icon'   => '',
			'parent' => '4',
			'child'  => []
		],
		[
			'id'     => '46',
			'name'   => 'Node.js',
			'class'  => '',
			'link'   => 'serverSide/nodejs',
			'icon'   => '',
			'parent' => '4',
			'child'  => []
		],
		[
			'id'     => '47',
			'name'   => 'Raspberry Pi',
			'class'  => '',
			'link'   => 'serverSide/raspberrypi',
			'icon'   => '',
			'parent' => '4',
			'child'  => []
		],
		[
			'id'     => '51',
			'name'   => 'XML',
			'class'  => '',
			'link'   => 'xml/xml',
			'icon'   => '',
			'parent' => '5',
			'child'  => []
		],
		[
			'id'     => '52',
			'name'   => 'XML Ajax',
			'class'  => '',
			'link'   => 'xml/xmlAjax',
			'icon'   => '',
			'parent' => '5',
			'child'  => []
		],
		[
			'id'     => '53',
			'name'   => 'XML DOM',
			'class'  => '',
			'link'   => 'xml/xmlDom',
			'icon'   => '',
			'parent' => '5',
			'child'  => []
		],
		[
			'id'     => '54',
			'name'   => 'XML DTD',
			'class'  => '',
			'link'   => 'xml/xmlDtd',
			'icon'   => '',
			'parent' => '5',
			'child'  => []
		],
		[
			'id'     => '55',
			'name'   => 'XML Schema',
			'class'  => '',
			'link'   => 'xml/xmlSchema',
			'icon'   => '',
			'parent' => '5',
			'child'  => []
		],
		[
			'id'     => '56',
			'name'   => 'XSLT',
			'class'  => '',
			'link'   => 'xml/xSlt',
			'icon'   => '',
			'parent' => '5',
			'child'  => []
		],
		[
			'id'     => '57',
			'name'   => 'XPath',
			'class'  => '',
			'link'   => 'xml/xPath',
			'icon'   => '',
			'parent' => '5',
			'child'  => []
		],
		[
			'id'     => '58',
			'name'   => 'XQuery',
			'class'  => '',
			'link'   => 'xml/xQuery',
			'icon'   => '',
			'parent' => '5',
			'child'  => []
		],
		[
			'id'     => '241',
			'name'   => 'Layout',
			'class'  => 'dropdown',
			'link'   => '#',
			'icon'   => '',
			'parent' => '24',
			'child'  => []
		],
		[
			'id'     => '242',
			'name'   => 'Content',
			'class'  => 'dropdown',
			'link'   => '#',
			'icon'   => '',
			'parent' => '24',
			'child'  => []
		],
		[
			'id'     => '243',
			'name'   => 'Components',
			'class'  => 'dropdown',
			'link'   => '#',
			'icon'   => '',
			'parent' => '24',
			'child'  => []
		],
		[
			'id'     => '244',
			'name'   => 'Utilities',
			'class'  => 'dropdown',
			'link'   => '#',
			'icon'   => '',
			'parent' => '24',
			'child'  => []
		],
		[
			'id'     => '251',
			'name'   => 'Font Awesome',
			'class'  => '',
			'link'   => 'htmlCss/icons/fontAwesome',
			'icon'   => '',
			'parent' => '25',
			'child'  => []
		],
		[
			'id'     => '252',
			'name'   => 'Themify',
			'class'  => '',
			'link'   => 'htmlCss/icons/themify',
			'icon'   => '',
			'parent' => '25',
			'child'  => []
		],
		[
			'id'     => '24101',
			'name'   => 'Overview',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/layout/overview',
			'icon'   => '',
			'parent' => '241',
			'child'  => []
		],
		[
			'id'     => '24102',
			'name'   => 'Grid',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/layout/grid',
			'icon'   => '',
			'parent' => '241',
			'child'  => []
		],
		[
			'id'     => '24103',
			'name'   => 'Utilities for Layout',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/layout/utilitiesForLayout',
			'icon'   => '',
			'parent' => '241',
			'child'  => []
		],
		[
			'id'     => '24201',
			'name'   => 'Reboot',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/content/reboot',
			'icon'   => '',
			'parent' => '242'
		],
		[
			'id'     => '24202',
			'name'   => 'Typography',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/content/typography',
			'icon'   => '',
			'parent' => '242'
		],
		[
			'id'     => '24203',
			'name'   => 'Code',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/content/code',
			'icon'   => '',
			'parent' => '242'
		],
		[
			'id'     => '24204',
			'name'   => 'Images',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/content/images',
			'icon'   => '',
			'parent' => '242'
		],
		[
			'id'     => '24205',
			'name'   => 'Tables',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/content/tables',
			'icon'   => '',
			'parent' => '242'
		],
		[
			'id'     => '24206',
			'name'   => 'Figures',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/content/figures',
			'icon'   => '',
			'parent' => '242'
		],
		[
			'id'     => '24301',
			'name'   => 'Alerts',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/alerts',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24302',
			'name'   => 'Badge',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/badge',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24303',
			'name'   => 'Breadcrumb',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/breadcrumb',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24304',
			'name'   => 'Buttons',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/buttons',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24305',
			'name'   => 'Button Group',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/buttonGroup',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24306',
			'name'   => 'Card',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/card',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24307',
			'name'   => 'Carousel',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/carousel',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24308',
			'name'   => 'Collapse',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/collapse',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24309',
			'name'   => 'Dropdowns',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/dropdowns',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24310',
			'name'   => 'Forms',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/forms',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24311',
			'name'   => 'Input Group',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/inputGroup',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24312',
			'name'   => 'Jumbotron',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/jumbotron',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24313',
			'name'   => 'List Group',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/listGroup',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24314',
			'name'   => 'Media Object',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/mediaObject',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24315',
			'name'   => 'Modal',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/modal',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24316',
			'name'   => 'Navs',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/navs',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24317',
			'name'   => 'Navbar',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/navbar',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24318',
			'name'   => 'Pagination',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/pagination',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24319',
			'name'   => 'Popovers',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/popovers',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24320',
			'name'   => 'Progress',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/progress',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24321',
			'name'   => 'Scrollspy',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/scrollspy',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24322',
			'name'   => 'Spinners',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/spinners',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24323',
			'name'   => 'Toasts',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/toasts',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24324',
			'name'   => 'Tooltips',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/components/tooltips',
			'icon'   => '',
			'parent' => '243'
		],
		[
			'id'     => '24401',
			'name'   => 'Borders',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/borders',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24402',
			'name'   => 'Clearfix',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/clearfix',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24403',
			'name'   => 'Close Icon',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/closeIcon',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24404',
			'name'   => 'Colors',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/colors',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24405',
			'name'   => 'Display',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/display',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24406',
			'name'   => 'Embed',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/embed',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24407',
			'name'   => 'Flex',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/flex',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24408',
			'name'   => 'Float',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/float',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24409',
			'name'   => 'Image Replacement',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/imageReplacement',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24410',
			'name'   => 'Overflow',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/overflow',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24411',
			'name'   => 'Position',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/position',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24412',
			'name'   => 'Screen Readers',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/screenReaders',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24413',
			'name'   => 'Shadows',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/shadows',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24414',
			'name'   => 'Sizing',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/sizing',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24415',
			'name'   => 'Spacing',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/spacing',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24416',
			'name'   => 'Stretched Link',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/stretchedLink',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24417',
			'name'   => 'Text',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/text',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24418',
			'name'   => 'Vertical Align',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/verticalAlign',
			'icon'   => '',
			'parent' => '244'
		],
		[
			'id'     => '24419',
			'name'   => 'Visibility',
			'class'  => '',
			'link'   => 'htmlCss/bootstrap/utilities/visibility',
			'icon'   => '',
			'parent' => '244'
		]
	];

	public function generateTreeParent($items = [], $id = 0)
	{
		$tree = '';

		for ($i = 0, $c = count($items); $i < $c; $i++) {
			$tree .= '<li class="nav-item sidebar-' . $items[$i]['id'] . '">';
			if ($items[$i]['parent'] == $id) {
				if ($items[$i]['class'] == 'dropdown') {
					$tree .= '<a class="nav-link collapsed right-arrow hover-100" href="' . $items[$i]['link'] . '" data-toggle="collapse" data-target="#collapse' . $items[$i]['id'] . '" role="button" aria-expanded="false" aria-controls="collapse' . $items[$i]['id'] . '">';
					$tree .= '<i class="' . $items[$i]['icon'] . ' mr-2"></i>' . $items[$i]['name'] . '</a>';
					$tree .= '<div id="collapse' . $items[$i]['id'] . '" class="nav-link-group collapse" data-parent=".sidebar-' . $items[$i]['parent'] . '">';
					$tree .= '<ul class="list-group list-group-flush">' . $this->generateTreeChild($items, $items[$i]['id']) . '</ul></div>';
				} else {
					$tree .= '<a class="nav-link hover-100 px-3" href="' . base_url('administrator') . '/' . $items[$i]['link'] . '" ng-class="{\'font-weight-bold\': isActiveLinkSidebar(\'/administrator/' . $items[$i]['link'] . '\')}">';
					$tree .= '<i class="' . $items[$i]['icon'] . ' mr-2"></i>' . $items[$i]['name'] . '</a>';
				}
			}
			$tree .= '</li>';
		}
		return $tree;
	}

	public function generateTreeChild($items = [], $id)
	{
		$tree = '';

		for ($i = 0, $c = count($items); $i < $c; $i++) {
			if ($items[$i]['parent'] == $id) {
				if ($items[$i]['class'] == 'dropdown') {
					$tree .= '<a class="list-group-item list-group-item-action collapsed border-left border-bottom-0 right-arrow hover-100 py-2" href="' . $items[$i]['link'] . '" data-toggle="collapse" data-target="#collapse' . $items[$i]['id'] . '" role="button" aria-expanded="false" aria-controls="collapse' . $items[$i]['id'] . '">' . $items[$i]['name'] . '</a>';
					$tree .= '<div id="collapse' . $items[$i]['id'] . '" class="nav-link-group collapse" data-parent=".sidebar-' . $items[$i]['parent'] . '">';
					$tree .= '<ul class="list-group list-group-flush list-group-child border-left sidebar-' . $items[$i]['id'] . '">';
					$tree .= $this->generateTreeChild($items, $items[$i]['id']) . '</ul></div>';
				} else {
					$tree .= '<a class="list-group-item list-group-item-action border-left border-bottom-0 hover-100 py-2" href="' . base_url('administrator') . '/' . $items[$i]['link'] . '" ng-class="{\'font-weight-bold\': isActiveLinkSidebar(\'/administrator/' . $items[$i]['link'] . '\')}" active-link>' . $items[$i]['name'] . '</a>';
				}
			}
		}
		return $tree;
	}
}
