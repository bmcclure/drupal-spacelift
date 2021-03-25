import React from 'react';

import OffcanvasSearchWithDropdown from './OffcanvasSearchWithDropdown.twig';

import OffcanvasSearchWithDropdownData from './OffcanvasSearchWithDropdown.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Organisms/Offcanvas Search With Dropdown' };

export const offcanvasSearchWithDropdown = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: OffcanvasSearchWithDropdown(OffcanvasSearchWithDropdownData),
    }}
  />
);
