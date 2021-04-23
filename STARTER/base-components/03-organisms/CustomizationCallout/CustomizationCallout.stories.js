import React from 'react';

import CustomizationCallout from './CustomizationCallout-demo.twig';

import CustomizationCalloutData from './CustomizationCallout.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Customization Callout' };

export const customizationCallout = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: CustomizationCallout(CustomizationCalloutData),
    }}
  />
);
