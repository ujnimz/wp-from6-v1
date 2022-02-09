<?php
/**
 * Register strings for polylang plugin translate
 */
$pll_strings = [
  [
    'name'      => 'Button label',
    'string'    => 'Load more',
    'context'   => 'From6',
    'multiline' => false,
  ],
  [
    'name'      => 'Label "Filter" on "Our work" page',
    'string'    => 'Filter',
    'context'   => 'From6',
    'multiline' => false,
  ],
  [
    'name'      => 'Label "More Projects Like This" on single work page',
    'string'    => 'More Projects Like This',
    'context'   => 'From6',
    'multiline' => false,
  ],
  [
    'name'      => 'Label "All" in Filter categories',
    'string'    => 'All',
    'context'   => 'From6',
    'multiline' => false,
  ],
  [
    'name'      => 'Label "Read More"',
    'string'    => 'Read More',
    'context'   => 'From6',
    'multiline' => false,
  ],
  [
    'name'      => 'Footer form headline',
    'string'    => 'Get in touch',
    'context'   => 'From6',
    'multiline' => false,
  ],

  [
    'name'      => 'Footer form Name field placeholder',
    'string'    => 'Name',
    'context'   => 'From6',
    'multiline' => false,
  ],
  [
    'name'      => 'Footer form Email field placeholder',
    'string'    => 'Email',
    'context'   => 'From6',
    'multiline' => false,
  ],
  [
    'name'      => 'Footer form Message field placeholder',
    'string'    => 'Message',
    'context'   => 'From6',
    'multiline' => false,
  ],
  [
    'name'      => 'Footer form Submit button label',
    'string'    => 'Submit',
    'context'   => 'From6',
    'multiline' => false,
  ],
  [
    'name'      => 'Message about the successful sending the contact form.',
    'string'    => 'Your message has been sent successfully. We will contact you shortly.',
    'context'   => 'From6',
    'multiline' => false,
  ],
  [
    'name'      => 'Error message when sending the contact form.',
    'string'    => 'An error occurred while sending the message. Please try again later.',
    'context'   => 'From6',
    'multiline' => false,
  ],
  [
    'name'      => 'See Related Projects',
    'string'    => 'See Related Projects',
    'context'   => 'From6',
    'multiline' => false,
  ],
];

if ( ! empty( $pll_strings ) && IS_PLL_ENABLE ) {
  foreach ( $pll_strings as $item ) {
    pll_register_string( $item['name'], $item['string'], $item['context'],  $item['multiline']);
  }
}
