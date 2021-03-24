import React from 'react';

import Footer from './Footer.twig';

import FooterData from './Footer.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Footer' };

export const FooterExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: Footer(FooterData),
    }}
  />
);
