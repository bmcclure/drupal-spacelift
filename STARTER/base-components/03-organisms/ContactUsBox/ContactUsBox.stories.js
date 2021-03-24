import React from 'react';

import ContactUsBox from './ContactUsBox.twig';

import ContactUsBoxData from './ContactUsBox.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Contact Us Box' };

export const ContactUsBoxExample = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: ContactUsBox(ContactUsBoxData),
    }}
  />
);
