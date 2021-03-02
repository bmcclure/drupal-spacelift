import React from 'react';

import Tooltip from './Tooltip.twig';

import TooltipData from './Tooltip.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Tooltips' };

export const tooltip = () => (
  <div dangerouslySetInnerHTML={{ __html: Tooltip(TooltipData) }} />
);
