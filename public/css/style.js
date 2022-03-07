import { StyleSheet } from 'react-native';

export default StyleSheet.create({
  fontFace: {
    fontFamily: ''yekan'',
    src: 'url('../font/Yekan.eot'),


    url('../font/Yekan.woff') format('woff'),
    url('../font/Yekan.ttf') format('truetype')',
    fontWeight: 'normal',
    fontStyle: 'normal'
  },
  fontFace: {
    fontFamily: ''numberyekan'',
    src: 'url('../font/yekannumbers-regular.eot'),


    url('../font/yekannumbers-regular.woff') format('woff'),
    url('../font/yekannumbers-regular.ttf') format('truetype')',
    fontWeight: 'normal',
    fontStyle: 'normal'
  },
  body: {
    background: '#f5f5f5',
    color: '#4a5f73',
    position: 'relative',
    paddingTop: [{ unit: 'px', value: 120 }],
    direction: 'rtl',
    fontFamily: 'yekan,numberyekan'
  },
  'header-c': {
    position: 'absolute',
    top: [{ unit: 'px', value: 0 }],
    right: [{ unit: 'px', value: 0 }],
    left: [{ unit: 'px', value: 0 }],
    background: '#fff'
  },
  'c-header_row': {
    flexWrap: 'wrap',
    marginRight: [{ unit: 'px', value: 0 }],
    marginLeft: [{ unit: 'px', value: 0 }],
    height: [{ unit: 'px', value: 75 }],
    display: 'flex',
    position: 'relative',
    padding: [{ unit: 'px', value: 18 }, { unit: 'px', value: 0 }, { unit: 'px', value: 18 }, { unit: 'px', value: 0 }],
    alignItems: 'center'
  },
  'c-header-logo': {
    position: 'relative',
    width: [{ unit: '%H', value: 1 }],
    minHeight: [{ unit: 'px', value: 1 }],
    paddingLeft: [{ unit: 'px', value: 0 }],
    maxWidth: [{ unit: 'px', value: 155 }],
    paddingRight: [{ unit: 'px', value: 9 }],
    maxHeight: [{ unit: '%V', value: 1 }],
    marginRight: [{ unit: 'px', value: 18 }]
  },
  'c-header-logo-img': {
    color: '#fff',
    height: [{ unit: 'px', value: 36 }],
    background: 'url("/img/logo.png")',
    display: 'block',
    backgroundSize: 'auto 137%'
  },
  container: {
    minWidth: [{ unit: 'px', value: 1006 }],
    maxWidth: [{ unit: 'px', value: 1676 }]
  },
  'search-input': {
    marginLeft: [{ unit: 'px', value: 80 }],
    width: [{ unit: '%H', value: 0.8 }],
    height: [{ unit: '%V', value: 1 }],
    borderRadius: '0 7px 7px 0',
    backgroundColor: '#eceff1',
    color: '#474747',
    fontWeight: '300',
    fontSize: [{ unit: 'rem', value: 0.857 }],
    lineHeight: [{ unit: 'px', value: 1.833 }],
    padding: [{ unit: 'px', value: 10 }, { unit: 'px', value: 10 }, { unit: 'px', value: 9 }, { unit: 'px', value: 10 }],
    zIndex: '51',
    position: 'relative',
    border: [{ unit: 'string', value: 'none' }]
  },
  'c-header-search': {
    position: 'relative',
    width: [{ unit: '%H', value: 1 }],
    minHeight: [{ unit: 'px', value: 1 }],
    flex: '0 0 calc(100% - 155px - 370px)',
    maxWidth: [{ unit: '%H', value: NaN }],
    flexGrow: '1',
    paddingRight: [{ unit: 'px', value: 50 }],
    paddingLeft: [{ unit: 'px', value: 50 }]
  },
  'search-button': {
    width: [{ unit: 'px', value: 60 }],
    height: [{ unit: '%V', value: 1 }],
    marginLeft: [{ unit: 'px', value: 70 }],
    backgroundColor: '#ef5661',
    borderRadius: '7px 0 0 7px',
    display: 'flex',
    alignItems: 'center',
    justifyContent: 'center',
    border: [{ unit: 'string', value: 'none' }],
    position: 'absolute',
    left: [{ unit: 'px', value: 0 }],
    top: [{ unit: 'px', value: 0 }],
    bottom: [{ unit: 'px', value: 0 }],
    cursor: 'pointer'
  },
  'search-button i': {
    color: '#fff',
    fontSize: [{ unit: 'px', value: 25 }]
  },
  'header-action': {
    maxWidth: [{ unit: 'px', value: 370 }],
    minHeight: [{ unit: 'px', value: 1 }],
    paddingLeft: [{ unit: 'px', value: 0 }],
    paddingRight: [{ unit: 'px', value: 0 }],
    display: 'flex',
    justifyContent: 'flex-end',
    height: [{ unit: '%V', value: 1 }],
    alignItems: 'center',
    position: 'unset'
  },
  'header-container': {
    position: 'relative',
    height: [{ unit: '%V', value: 1 }],
    maxWidth: [{ unit: '%H', value: 0.6 }]
  },
  'header-container i': {
    fontSize: [{ unit: 'px', value: 22 }],
    paddingRight: [{ unit: 'px', value: 22 }],
    color: '#7c7a7a'
  },
  'header-user-dropdown': {
    position: 'absolute',
    top: [{ unit: '%V', value: NaN }],
    left: [{ unit: 'px', value: 0 }],
    width: [{ unit: 'px', value: 228 }],
    backgroundColor: '#fff',
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 2 }, { unit: 'px', value: 9 }, { unit: 'px', value: 0 }, { unit: 'string', value: '#d3d9df' }],
    padding: [{ unit: 'px', value: 15 }, { unit: 'px', value: 15 }, { unit: 'px', value: 15 }, { unit: 'px', value: 15 }],
    zIndex: '123',
    marginLeft: [{ unit: 'px', value: -34 }]
  },
  'header-user-dropdown::before': {
    height: [{ unit: 'px', value: 4 }],
    backgroundColor: '#ef5661',
    bottom: [{ unit: '%V', value: 1 }],
    left: [{ unit: 'px', value: 0 }],
    right: [{ unit: 'px', value: 0 }]
  },
  'header-user-dropdown::after': {
    width: [{ unit: 'px', value: 0 }],
    height: [{ unit: 'px', value: 0 }],
    borderStyle: 'solid',
    borderWidth: '0 8px 8px',
    borderColor: 'transparent transparent #ef5661',
    position: 'absolute',
    bottom: [{ unit: '%V', value: 1 }],
    marginBottom: [{ unit: 'px', value: 2 }],
    left: [{ unit: 'px', value: 30 }]
  },
  before: {
    width: [{ unit: 'px', value: 0 }],
    height: [{ unit: 'px', value: 0 }],
    borderStyle: 'solid',
    borderWidth: '0 8px 8px',
    borderColor: 'transparent transparent #ef5661',
    position: 'absolute',
    bottom: [{ unit: '%V', value: 1 }],
    marginBottom: [{ unit: 'px', value: 2 }],
    left: [{ unit: 'px', value: 30 }]
  },
  after: {
    height: [{ unit: 'px', value: 4 }],
    backgroundColor: '#ef5661',
    bottom: [{ unit: '%V', value: 1 }],
    left: [{ unit: 'px', value: 0 }],
    right: [{ unit: 'px', value: 0 }],
    position: 'absolute'
  },
  'header-dropdown-signup a': {
    color: '#008ec9 !important',
    borderBottom: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'dashed' }, { unit: 'string', value: '#008ec9' }],
    fontSize: [{ unit: 'rem', value: 1 }],
    lineHeight: [{ unit: 'px', value: 1.571 }],
    fontWeight: '700',
    paddingBottom: [{ unit: 'px', value: 3 }],
    marginRight: [{ unit: 'px', value: 10 }]
  },
  'a': {
    textDecoration: 'none'
  },
  'header-dropdown-login': {
    backgroundColor: '#00bfd6',
    borderRadius: '5px',
    display: 'block',
    width: [{ unit: '%H', value: 1 }],
    textAlign: 'center',
    height: [{ unit: 'px', value: 40 }],
    verticalAlign: 'middle',
    letterSpacing: [{ unit: 'px', value: -0.5 }],
    cursor: 'pointer',
    color: '#fff !important',
    fontWeight: '700',
    fontSize: [{ unit: 'rem', value: 1 }],
    lineHeight: [{ unit: 'px', value: 38 }]
  },
  'header-user': {
    textAlign: 'right',
    marginTop: [{ unit: 'px', value: 20 }]
  },
  'header-user span': {
    paddingRight: [{ unit: 'px', value: 10 }]
  },
  'header-cart': {
    textAlign: 'right',
    marginTop: [{ unit: 'px', value: 16 }]
  },
  'header-cart span': {
    paddingRight: [{ unit: 'px', value: 10 }]
  },
  'a:hover': {
    textDecoration: 'none'
  },
  'header-div': {
    borderRight: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: '#000' }],
    left: [{ unit: '%H', value: -0.17 }],
    position: 'absolute',
    top: [{ unit: '%V', value: 0.01 }],
    height: [{ unit: 'px', value: 30 }],
    width: [{ unit: 'px', value: 0 }]
  },
  'header-shop': {
    width: [{ unit: 'px', value: 154 }],
    textAlign: 'center',
    backgroundColor: '#fff',
    border: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: '#00bfd6' }],
    color: '#00bfd6',
    marginRight: [{ unit: 'px', value: 33 }],
    padding: [{ unit: 'px', value: 6 }, { unit: 'px', value: 6 }, { unit: 'px', value: 6 }, { unit: 'px', value: 6 }],
    borderRadius: '8px'
  },
  'header-user-dropdown': {
    display: 'none'
  },
  'navbar-nav': {
    width: [{ unit: '%H', value: 1 }],
    height: [{ unit: 'px', value: 39 }],
    background: '#616161',
    position: 'relative',
    marginTop: [{ unit: 'px', value: -46 }]
  },
  // *******slider****
  '#carousel-indicators active': {
    backgroundColor: '#43d2f5 !important'
  },
  '#carousel-indicators li': {
    width: [{ unit: 'px', value: 10 }, { unit: 'string', value: '!important' }],
    height: [{ unit: 'px', value: 10 }, { unit: 'string', value: '!important' }],
    borderRadius: '10px !important'
  },
  'navbar-nav span li': {
    direction: 'rtl',
    textAlign: 'right',
    paddingTop: [{ unit: 'px', value: 8 }],
    float: 'right',
    fontSize: [{ unit: 'px', value: 12 }],
    height: [{ unit: '%V', value: 1 }],
    paddingRight: [{ unit: 'px', value: 13 }]
  },
  'navbar-nav span li a': {
    color: '#fff'
  },
  'navbar-nav span': {
    height: [{ unit: '%V', value: 1 }]
  },
  '#dropdown-large:hover': {
    borderBottom: [{ unit: 'px', value: 2 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: '#ef5661' }],
    boxShadow: [{ unit: 'px', value: 1 }, { unit: 'px', value: 0 }, { unit: 'px', value: 1 }, { unit: 'string', value: '' }, { unit: 'px', value: 1 }, { unit: 'string', value: '#444848' }]
  },
  'menu-wrapper li a': {
  },
  li: {
    listStyle: 'none'
  },
  'dropdown-menu': {
    minWidth: [{ unit: 'px', value: 1264 }],
    minHeight: [{ unit: 'px', value: 300 }],
    top: [{ unit: 'px', value: 14 }, { unit: 'string', value: '!important' }]
  },
  'menu-wrapper col-sm-2': {
    maxWidth: [{ unit: '%H', value: 0.21667000000000003 }, { unit: 'string', value: '!important' }]
  },
  // *******************************
  '#card': {
    position: 'absolute',
    width: [{ unit: '%H', value: 1 }],
    height: [{ unit: 'px', value: 410 }],
    overflow: 'hidden'
  },
  discount_bar: {
    background: '#ef5661 url("../img/discount.png") no-repeat 50% 50%',
    backgroundSize: 'auto 19px',
    borderRadius: '0 0 24px 24px',
    width: [{ unit: 'px', value: 223 }],
    height: [{ unit: 'px', value: 46 }],
    display: 'block',
    right: [{ unit: '%H', value: 0.12 }],
    position: 'absolute'
  },
  'carousel-fade carousel-inner carousel-item': {
    transitionProperty: 'opacity'
  },
  'carousel-fade carousel-inner carousel-item': {
    opacity: '0'
  },
  'carousel-fade carousel-inner active': {
    opacity: '0'
  },
  'carousel-fade carousel-inner active': {
    opacity: '1'
  },
  '#carousel-item img': {
    width: [{ unit: 'px', value: 303 }],
    height: [{ unit: 'px', value: 303 }],
    float: 'right',
    marginTop: [{ unit: 'px', value: 58 }],
    marginRight: [{ unit: 'px', value: 100 }]
  },
  'carousel-indicators li': {
    textIndent: '0px !important',
    width: [{ unit: 'string', value: 'auto' }, { unit: 'string', value: '!important' }],
    height: [{ unit: 'string', value: 'auto' }, { unit: 'string', value: '!important' }]
  },
  '#pager': {
    background: '#f1f7fb',
    width: [{ unit: '%H', value: 1 }, { unit: 'string', value: '!important' }],
    height: [{ unit: 'px', value: 56 }],
    marginRight: [{ unit: '%H', value: 0 }, { unit: 'string', value: '!important' }],
    bottom: [{ unit: '%V', value: -0.05 }, { unit: 'string', value: '!important' }],
    position: 'absolute',
    zIndex: '15',
    paddingTop: [{ unit: 'px', value: 7 }],
    paddingBottom: [{ unit: 'px', value: 6 }],
    fontSize: [{ unit: 'px', value: 12 }]
  },
  '#pager li': {
    float: 'right',
    marginRight: [{ unit: 'px', value: 33 }],
    padding: [{ unit: 'px', value: 9 }, { unit: 'px', value: 9 }, { unit: 'px', value: 9 }, { unit: 'px', value: 9 }],
    borderRadius: '5px'
  },
  '#pager li a span': {
    color: '#000 !important'
  },
  '#pager active': {
    background: '#ef5661 !important',
    borderRadius: '6px',
    boxShadow: [{ unit: 'px', value: 1 }, { unit: 'px', value: 1 }, { unit: 'px', value: 2 }, { unit: 'px', value: 1 }, { unit: 'string', value: '#eee' }],
    color: '#fff !important'
  },
  '#pager': {
    background: '#f1f7fb',
    width: [{ unit: '%H', value: 1 }, { unit: 'string', value: '!important' }],
    height: [{ unit: 'px', value: 56 }],
    marginRight: [{ unit: '%H', value: 0 }, { unit: 'string', value: '!important' }],
    bottom: [{ unit: '%V', value: -0.05 }, { unit: 'string', value: '!important' }]
  },
  'carousel-price': {
    textAlign: 'right',
    paddingTop: [{ unit: 'px', value: 86 }]
  },
  'carousel-price span': {
    color: '#7d7f7f',
    fontSize: [{ unit: 'px', value: 17 }],
    textDecorationLine: 'line-through'
  },
  'carousel-price h4': {
    color: '#ef5661',
    marginTop: [{ unit: 'px', value: 16 }]
  },
  'carousel-price p': {
    float: 'left',
    left: [{ unit: '%H', value: 0.32 }],
    position: 'absolute',
    marginTop: [{ unit: 'px', value: -35 }],
    background: '#ef5661',
    padding: [{ unit: 'px', value: 7 }, { unit: 'px', value: 7 }, { unit: 'px', value: 7 }, { unit: 'px', value: 7 }],
    borderRadius: '20px',
    color: '#fff'
  },
  'carousel-title': {
    textAlign: 'right',
    marginTop: [{ unit: 'px', value: 30 }]
  },
  'carousel-title1': {
    textAlign: 'right',
    marginTop: [{ unit: 'px', value: 30 }]
  },
  atrr: {
    textAlign: 'right',
    marginTop: [{ unit: 'px', value: 15 }],
    paddingRight: [{ unit: 'px', value: 24 }],
    right: [{ unit: '%H', value: 0.38 }],
    position: 'absolute'
  },
  'atrr ul li': {
    listStyle: 'unset !important'
  },
  caroufredsel_wrapper: {
    left: [{ unit: '%H', value: 0 }, { unit: 'string', value: '!important' }],
    width: [{ unit: '%H', value: 1 }, { unit: 'string', value: '!important' }],
    overflow: 'visible !important'
  },
  '#next': {
    width: [{ unit: 'px', value: 80 }],
    height: [{ unit: 'px', value: 80 }],
    top: [{ unit: '%V', value: 0.81 }],
    position: 'absolute',
    backgroundColor: 'hsla(0,0%,100%,.7)',
    zIndex: '999',
    borderRadius: '100%',
    right: [{ unit: '%H', value: -0.04 }]
  },
  '#next span': {
    fontSize: [{ unit: 'px', value: 35 }, { unit: 'string', value: '!important' }],
    color: '#000',
    paddingRight: [{ unit: 'px', value: 35 }]
  },
  '#prev span': {
    fontSize: [{ unit: 'px', value: 35 }, { unit: 'string', value: '!important' }],
    color: '#000',
    paddingLeft: [{ unit: 'px', value: 35 }]
  },
  '#prev': {
    width: [{ unit: 'px', value: 80 }],
    height: [{ unit: 'px', value: 80 }],
    top: [{ unit: '%V', value: 0.81 }],
    position: 'absolute',
    backgroundColor: 'hsla(0,0%,100%,.7)',
    zIndex: '999',
    borderRadius: '100%',
    left: [{ unit: '%H', value: -0.04 }]
  },
  // ********************
  'disabled-right': {
    position: 'relative',
    'only screen&&<w1000': {
      display: 'none'
    }
  },
  'disabled-right img': {
    height: [{ unit: 'px', value: 325 }],
    width: [{ unit: 'px', value: 279 }],
    marginTop: [{ unit: 'px', value: 16 }],
    borderRadius: '5px'
  },
  'disabled-right a': {
    width: [{ unit: 'px', value: 282 }],
    borderRadius: '5px',
    backgroundColor: '#00bfd6',
    position: 'absolute',
    color: '#fff !important',
    right: [{ unit: '%H', value: -0.01 }],
    marginLeft: [{ unit: '%H', value: 0.16 }],
    padding: [{ unit: 'px', value: 18 }, { unit: 'px', value: 18 }, { unit: 'px', value: 18 }, { unit: 'px', value: 18 }],
    textAlign: 'center',
    top: [{ unit: 'px', value: 372 }],
    fontSize: [{ unit: 'px', value: 12 }],
    overflow: 'hidden'
  },
  'disabled-right a span i::after': {
    backgroundImage: 'url("../img/left-arrow.png")',
    position: 'absolute',
    right: [{ unit: 'px', value: 6 }],
    top: [{ unit: '%V', value: 0.5 }],
    transform: 'translateY(-50%) rotateY(180deg)',
    color: '#fff',
    fontSize: [{ unit: 'px', value: 20 }],
    lineHeight: [{ unit: 'px', value: 1.1 }],
    fontWeight: '700'
  },
  'disabled-right a span i::before': {
    backgroundImage: 'url("../img/left-arrow.png")',
    height: [{ unit: 'px', value: 90 }],
    width: [{ unit: 'px', value: 90 }],
    right: [{ unit: 'px', value: -40 }],
    position: 'absolute',
    top: [{ unit: '%V', value: 0.5 }],
    transform: 'translateY(-50%)',
    backgroundColor: '#fff',
    opacity: '.21',
    borderRadius: '100%'
  },
  'search-bottom': {
    display: 'none'
  },
  '#discount-image': {
    position: 'absolute',
    marginTop: [{ unit: 'px', value: 20 }],
    marginRight: [{ unit: 'px', value: -18 }]
  },
  '#discount-image col-lg-3': {
    float: 'right !important',
    marginTop: [{ unit: 'px', value: 11 }]
  },
  '#discount-image col-lg-3 img': {
    width: [{ unit: '%H', value: 1 }],
    height: [{ unit: '%V', value: 1 }]
  },
  '#kala card': {
    height: [{ unit: 'px', value: 50 }],
    marginTop: [{ unit: 'px', value: 304 }],
    minHeight: [{ unit: 'px', value: 351 }]
  },
  '#kala1 card': {
    height: [{ unit: 'px', value: 50 }],
    width: [{ unit: '%H', value: 1 }],
    marginTop: [{ unit: 'px', value: 20 }],
    minHeight: [{ unit: 'px', value: 351 }]
  },
  '#kala2 card': {
    height: [{ unit: 'px', value: 50 }],
    width: [{ unit: '%H', value: 1 }],
    marginTop: [{ unit: 'px', value: 20 }],
    minHeight: [{ unit: 'px', value: 351 }]
  },
  '#foo1 li img': {
    width: [{ unit: '%H', value: 0.79 }]
  },
  '#foo2 li img': {
    width: [{ unit: '%H', value: 0.79 }]
  },
  '#foo3 li img': {
    width: [{ unit: '%H', value: 1 }]
  },
  '#foo4 li img': {
    width: [{ unit: '%H', value: 1 }]
  },
  '#foo5 li img': {
    width: [{ unit: '%H', value: 1 }]
  },
  '#foo6 li img': {
    width: [{ unit: '%H', value: 1 }]
  },
  '#foo7 li img': {
    width: [{ unit: '%H', value: 1 }]
  },
  '#foo8 li img': {
    width: [{ unit: '%H', value: 1 }]
  },
  '#foo9 li img': {
    width: [{ unit: '%H', value: 1 }]
  },
  '#foo10 li img': {
    width: [{ unit: '%H', value: 1 }]
  },
  '#kala2': {
    position: 'relative',
    width: [{ unit: '%H', value: 0.98 }],
    marginTop: [{ unit: '%V', value: 0.73 }],
    right: [{ unit: '%H', value: 0.01 }]
  },
  '#kala3 card': {
    height: [{ unit: 'px', value: 50 }],
    width: [{ unit: '%H', value: 1 }],
    marginTop: [{ unit: 'px', value: 20 }],
    minHeight: [{ unit: 'px', value: 351 }]
  },
  '#kala3': {
    position: 'relative',
    width: [{ unit: '%H', value: 0.98 }],
    marginTop: [{ unit: '%V', value: 0.21 }],
    right: [{ unit: '%H', value: 0.01 }]
  },
  '#kala4 card': {
    height: [{ unit: 'px', value: 50 }],
    width: [{ unit: '%H', value: 1 }],
    marginTop: [{ unit: 'px', value: 20 }],
    minHeight: [{ unit: 'px', value: 351 }]
  },
  '#kala4': {
    position: 'relative',
    width: [{ unit: '%H', value: 0.98 }],
    marginTop: [{ unit: '%V', value: 0.01 }],
    right: [{ unit: '%H', value: 0.01 }]
  },
  '#brand card': {
    height: [{ unit: 'px', value: 50 }],
    width: [{ unit: '%H', value: 1 }],
    marginTop: [{ unit: 'px', value: 20 }],
    minHeight: [{ unit: 'px', value: 243 }]
  },
  '#foo11 li img': {
    height: [{ unit: 'px', value: 161 }]
  },
  '#foo11 li': {
    width: [{ unit: 'px', value: 256 }, { unit: 'string', value: '!important' }]
  },
  '#brand': {
    position: 'relative',
    width: [{ unit: '%H', value: 0.98 }],
    marginTop: [{ unit: '%V', value: 0.01 }],
    right: [{ unit: '%H', value: 0.01 }]
  },
  text: {
    float: 'right',
    color: '#4a5f73',
    fontSize: [{ unit: 'px', value: 11 }],
    marginTop: [{ unit: 'px', value: 18 }],
    width: [{ unit: '%H', value: 1 }]
  },
  price: {
    color: '#fb3449'
  },
  '#kala5 card': {
    height: [{ unit: 'px', value: 50 }],
    width: [{ unit: '%H', value: 1 }],
    marginTop: [{ unit: 'px', value: 20 }],
    minHeight: [{ unit: 'px', value: 351 }]
  },
  '#kala5': {
    position: 'relative',
    width: [{ unit: '%H', value: 0.98 }],
    marginTop: [{ unit: '%V', value: 0.01 }],
    right: [{ unit: '%H', value: 0.01 }]
  },
  '#kala6 card': {
    height: [{ unit: 'px', value: 50 }],
    width: [{ unit: '%H', value: 1 }],
    marginTop: [{ unit: 'px', value: 20 }],
    minHeight: [{ unit: 'px', value: 351 }]
  },
  '#kala6': {
    position: 'relative',
    width: [{ unit: '%H', value: 0.98 }],
    marginTop: [{ unit: '%V', value: 0.01 }],
    right: [{ unit: '%H', value: 0.01 }]
  },
  'carousel-title1 hr': {
    width: [{ unit: '%H', value: 0.83 }],
    borderBottom: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: '#555555' }],
    float: 'left',
    marginLeft: [{ unit: 'px', value: 33 }],
    marginTop: [{ unit: 'px', value: -8 }]
  },
  'carousel-title1 h6': {
    marginTop: [{ unit: 'px', value: -11 }],
    marginRight: [{ unit: 'px', value: 38 }],
    fontWeight: 'bold',
    borderBottom: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: '#ef5661' }],
    width: [{ unit: '%H', value: 0.1 }],
    paddingBottom: [{ unit: 'px', value: 15 }]
  },
  'carousel-title hr': {
    width: [{ unit: '%H', value: 0.64 }],
    borderBottom: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'red' }],
    float: 'left',
    marginLeft: [{ unit: 'px', value: 33 }],
    marginTop: [{ unit: 'px', value: -8 }]
  },
  'carousel-title h5': {
    marginTop: [{ unit: 'px', value: -11 }],
    marginRight: [{ unit: 'px', value: 38 }],
    fontWeight: 'bold',
    borderBottom: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: 'red' }],
    width: [{ unit: '%H', value: 0.26 }],
    paddingBottom: [{ unit: 'px', value: 15 }]
  },
  'list_carousel ul': {
    margin: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }],
    padding: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }],
    listStyle: 'none',
    display: 'block'
  },
  'list_carousel li': {
    fontSize: [{ unit: 'px', value: 15 }],
    color: '#999',
    textAlign: 'center',
    width: [{ unit: 'px', value: 271 }],
    padding: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }],
    margin: [{ unit: 'px', value: 6 }, { unit: 'px', value: 6 }, { unit: 'px', value: 6 }, { unit: 'px', value: 6 }],
    display: 'block',
    float: 'left'
  },
  list_carouselresponsive: {
    width: [{ unit: 'string', value: 'auto' }],
    marginLeft: [{ unit: 'px', value: 0 }]
  },
  'list_carousel1 ul': {
    margin: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }],
    padding: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }],
    listStyle: 'none',
    display: 'block'
  },
  'list_carousel1 li': {
    fontSize: [{ unit: 'px', value: 15 }],
    color: '#999',
    textAlign: 'center',
    width: [{ unit: 'px', value: 250 }],
    padding: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }],
    margin: [{ unit: 'px', value: 6 }, { unit: 'px', value: 6 }, { unit: 'px', value: 6 }, { unit: 'px', value: 6 }],
    display: 'block',
    float: 'left'
  },
  list_carousel1responsive: {
    width: [{ unit: 'string', value: 'auto' }],
    marginLeft: [{ unit: 'px', value: 0 }]
  },
  '#foo2 li price': {
    color: '#fb3449'
  },
  caroufredsel_wrapper: {
    height: [{ unit: 'px', value: 305 }, { unit: 'string', value: '!important' }]
  },
  '#foo2 li text': {
    lineHeight: [{ unit: 'px', value: 2 }]
  },
  timer: {
    background: '#ef5661',
    width: [{ unit: '%H', value: 1 }],
    height: [{ unit: 'px', value: 1 }]
  },
  '#foo1 li price': {
    color: '#fb3449',
    lineHeight: [{ unit: 'px', value: 4 }]
  },
  '#foo1 li text': {
    lineHeight: [{ unit: 'px', value: 2 }]
  },
  clearfix: {
    float: 'none',
    clear: 'both'
  },
  '#prev3': {
    float: 'right',
    position: 'relative',
    zIndex: '9999',
    fontSize: [{ unit: 'px', value: 34 }],
    color: '#9a9a9a',
    marginTop: [{ unit: 'px', value: -209 }],
    width: [{ unit: 'px', value: 70 }],
    height: [{ unit: 'px', value: 70 }],
    borderRadius: '100%',
    background: '#fff',
    opacity: '0.8',
    boxShadow: [{ unit: 'px', value: 2 }, { unit: 'px', value: 2 }, { unit: 'px', value: 1 }, { unit: 'px', value: 0 }, { unit: 'string', value: '#eee' }],
    marginRight: [{ unit: 'px', value: -12 }],
    overflow: 'visible',
    textAlign: 'center',
    paddingTop: [{ unit: 'px', value: 5 }]
  },
  '#next3': {
    float: 'left',
    position: 'relative',
    zIndex: '9999',
    fontSize: [{ unit: 'px', value: 34 }],
    color: '#9a9a9a',
    marginTop: [{ unit: 'px', value: -70 }],
    width: [{ unit: 'px', value: 70 }],
    height: [{ unit: 'px', value: 70 }],
    borderRadius: '100%',
    background: '#fff',
    opacity: '0.8',
    right: [{ unit: '%H', value: 0.94 }],
    boxShadow: [{ unit: 'px', value: 2 }, { unit: 'px', value: 2 }, { unit: 'px', value: 1 }, { unit: 'px', value: 0 }, { unit: 'string', value: '#eee' }],
    marginLeft: [{ unit: 'px', value: -12 }],
    overflow: 'visible',
    textAlign: 'center',
    paddingTop: [{ unit: 'px', value: 5 }]
  },
  '#prev2': {
    float: 'right',
    position: 'relative',
    zIndex: '9999',
    fontSize: [{ unit: 'px', value: 34 }],
    color: '#9a9a9a',
    marginTop: [{ unit: 'px', value: -209 }],
    width: [{ unit: 'px', value: 70 }],
    height: [{ unit: 'px', value: 70 }],
    borderRadius: '100%',
    background: '#fff',
    opacity: '0.8',
    boxShadow: [{ unit: 'px', value: 2 }, { unit: 'px', value: 2 }, { unit: 'px', value: 1 }, { unit: 'px', value: 0 }, { unit: 'string', value: '#eee' }],
    marginRight: [{ unit: 'px', value: -12 }],
    overflow: 'visible',
    textAlign: 'center',
    paddingTop: [{ unit: 'px', value: 5 }]
  },
  '#next2': {
    float: 'left',
    position: 'relative',
    zIndex: '9999',
    fontSize: [{ unit: 'px', value: 34 }],
    color: '#9a9a9a',
    marginTop: [{ unit: 'px', value: -70 }],
    width: [{ unit: 'px', value: 70 }],
    height: [{ unit: 'px', value: 70 }],
    borderRadius: '100%',
    background: '#fff',
    opacity: '0.8',
    right: [{ unit: '%H', value: 0.94 }],
    boxShadow: [{ unit: 'px', value: 2 }, { unit: 'px', value: 2 }, { unit: 'px', value: 1 }, { unit: 'px', value: 0 }, { unit: 'string', value: '#eee' }],
    marginLeft: [{ unit: 'px', value: -12 }],
    overflow: 'visible',
    textAlign: 'center',
    paddingTop: [{ unit: 'px', value: 5 }]
  },
  dark: {
    background: '#000000',
    opacity: '.7',
    height: [{ unit: 'px', value: 2500 }],
    width: [{ unit: '%H', value: 1 }],
    position: 'absolute',
    top: [{ unit: 'px', value: 0 }],
    display: 'none'
  },
  '#foo2 li': {
    fontSize: [{ unit: 'px', value: 15 }],
    color: '#999',
    textAlign: 'center',
    width: [{ unit: 'px', value: 256 }],
    padding: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }],
    margin: [{ unit: 'px', value: 6 }, { unit: 'px', value: 6 }, { unit: 'px', value: 6 }, { unit: 'px', value: 6 }],
    display: 'block',
    float: 'left',
    height: [{ unit: 'px', value: 296 }]
  },
  'list_carousel ul li:hover': {
    boxShadow: [{ unit: 'px', value: 1 }, { unit: 'px', value: 1 }, { unit: 'px', value: 1 }, { unit: 'px', value: 2 }, { unit: 'string', value: '#e0e0e033' }],
    cursor: 'pointer'
  },
  // *********footer**********
  footer: {
    marginTop: [{ unit: '%V', value: 0.1 }],
    borderTop: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: '#ddd' }]
  },
  'footer-top': {
    background: '#eceff1',
    minHeight: [{ unit: 'px', value: 410 }],
    width: [{ unit: '%H', value: 1 }]
  },
  'footer-bottom': {
    backgroundColor: '#d7dee0',
    width: [{ unit: '%H', value: 1 }],
    height: [{ unit: 'px', value: 300 }],
    color: '#515151'
  },
  footer_item: {
    height: [{ unit: 'px', value: 129 }],
    borderBottom: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: '#d3d3d3' }]
  },
  'footer_item ul li': {
    width: [{ unit: '%H', value: 0.17 }],
    height: [{ unit: 'px', value: 55 }],
    float: 'right'
  },
  'footer_item ul li span': {
    position: 'absolute',
    float: 'right',
    marginRight: [{ unit: 'px', value: -64 }],
    fontSize: [{ unit: 'px', value: 12 }],
    marginTop: [{ unit: 'px', value: 102 }]
  },
  'footer-content ul li': {
    float: 'right',
    textAlign: 'right',
    fontSize: [{ unit: 'px', value: 12 }]
  },
  'footer-content': {
    marginTop: [{ unit: 'px', value: 15 }]
  },
  'footer-content ul li a': {
    display: 'block',
    color: '#838383',
    lineHeight: [{ unit: 'px', value: 2.571 }],
    fontSize: [{ unit: 'px', value: 11 }]
  },
  digi_insta: {
    width: [{ unit: 'px', value: 134 }],
    height: [{ unit: 'px', value: 39 }],
    textAlign: 'center',
    borderRadius: '9px',
    backgroundImage: 'linear-gradient(266deg,#4e60d3,#913baf 35%,#d52d88 68%,#f26d4f)',
    boxShadow: [{ unit: 'px', value: 0 }, { unit: 'px', value: 2 }, { unit: 'px', value: 4 }, { unit: 'px', value: 0 }, { unit: 'string', value: 'rgba(0,0,0,.11)' }],
    color: '#fff !important',
    fontWeight: '700',
    display: 'inline-block',
    fontSize: [{ unit: 'px', value: 12 }],
    fontSize: [{ unit: 'rem', value: 0.857 }],
    lineHeight: [{ unit: 'px', value: 45 }]
  },
  'footer__description-content aside': {
    width: [{ unit: '%H', value: 0.6 }],
    textAlign: 'right',
    fontSize: [{ unit: 'px', value: 12 }],
    lineHeight: [{ unit: 'px', value: 2 }],
    color: '#6d6d6d',
    marginRight: [{ unit: 'px', value: 35 }],
    paddingTop: [{ unit: 'px', value: 21 }]
  },
  'footer__description-content aside ul li': {
    float: 'right',
    marginRight: [{ unit: 'px', value: 10 }]
  },
  'footer-left ul li': {
    float: 'left',
    marginRight: [{ unit: 'px', value: 10 }]
  },
  'footer-left ul li img': {
    width: [{ unit: 'px', value: 118 }]
  },
  'footer-left': {
    float: 'left',
    marginTop: [{ unit: 'px', value: -100 }],
    marginLeft: [{ unit: 'px', value: 64 }]
  },
  'footer-bottom1 ul li': {
    float: 'right',
    width: [{ unit: '%H', value: 0.2 }]
  },
  'footer-bottom1 ul li img': {
    width: [{ unit: 'px', value: 131 }],
    height: [{ unit: 'px', value: 40 }]
  },
  'footer-bottom1': {
    marginTop: [{ unit: 'px', value: 45 }],
    borderBottom: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: '#9b9696' }],
    height: [{ unit: 'px', value: 58 }]
  },
  '#ListProduct ul li': {
    border: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: '#ececec' }],
    height: [{ unit: 'px', value: 400 }]
  },
  '#ListProduct ul li text': {
    float: 'right',
    color: '#4a5f73',
    fontSize: [{ unit: 'px', value: 13 }],
    marginTop: [{ unit: 'px', value: 26 }],
    width: [{ unit: '%H', value: 1 }],
    textAlign: 'right'
  },
  '#ListProduct ul li price': {
    color: '#fb3449',
    textAlign: 'right',
    float: 'right',
    marginTop: [{ unit: 'px', value: 39 }],
    width: [{ unit: '%H', value: 1 }],
    borderBottom: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: '#ddd' }],
    paddingBottom: [{ unit: 'px', value: 15 }]
  },
  category: {
    fontSize: [{ unit: 'px', value: 12 }],
    color: '#000'
  },
  categorys: {
    padding: [{ unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }, { unit: 'px', value: 0 }],
    fontSize: [{ unit: 'px', value: 13 }]
  },
  'categorys li': {
    textAlign: 'right'
  },
  'categorys li i': {
    fontSize: [{ unit: 'px', value: 14 }]
  },
  'categorys li a': {
    marginRight: [{ unit: 'px', value: 5 }]
  },
  '#ListProduct ul li:hover': {
    boxShadow: [{ unit: 'px', value: 3 }, { unit: 'px', value: 3 }, { unit: 'px', value: 3 }, { unit: 'string', value: '' }, { unit: 'px', value: 3 }, { unit: 'string', value: '#ddd' }],
    zIndex: '999'
  },
  brandsearch: {
    width: [{ unit: '%H', value: 1 }],
    position: 'absolute',
    borderTop: [{ unit: 'px', value: 1 }, { unit: 'string', value: 'solid' }, { unit: 'string', value: '#e0d9d9' }],
    marginTop: [{ unit: 'px', value: 20 }],
    right: [{ unit: 'px', value: 0 }]
  },
  'brandsearch ul li': {
    display: 'inline-flex',
    position: 'relative',
    float: 'right'
  },
  'brandsearch ul': {
    marginTop: [{ unit: 'px', value: 13 }],
    marginRight: [{ unit: 'px', value: -13 }]
  },
  'shopheader li': {
    textAlign: 'right',
    fontSize: [{ unit: 'px', value: 12 }],
    marginTop: [{ unit: 'px', value: 10 }],
    float: 'right',
    marginRight: [{ unit: 'px', value: 24 }],
    cursor: 'pointer'
  }
});
