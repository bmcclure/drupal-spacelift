import React from 'react';

import Subsection from './Subsection-demo.twig';

import SubsectionData from './Subsection.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Subsection' };

export const subsection = () => (
  <div dangerouslySetInnerHTML={{ __html: Subsection(SubsectionData) }} />
);
