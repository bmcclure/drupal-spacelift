import React from 'react';

import Cta from './cta.twig';

import CtaData from './cta.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/CTA' };

export const cta = () => (
  <div dangerouslySetInnerHTML={{ __html: Cta(CtaData) }} />
);
