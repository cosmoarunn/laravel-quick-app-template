import * as Popper from "@popperjs/core";
import cash from "cash-dom";

(function (cash) {
  "use strict";

  // Hide dropdown
  function hide() {
    cash(".dropdown-menu").each(async function () {
      if (
        cash(this).attr("id") !== undefined &&
        cash('[data-dropdown-replacer="' + cash(this).attr("id") + '"]')
          .length &&
        cash(this).data("dropdown-programmatically") === undefined
      ) {
        let randId = cash(this).attr("id");
        let dropdownToggle = cash('[data-dropdown-replacer="' + randId + '"]')
          .parent()
          .find(".dropdown-toggle");

        // Animate dropdown
        cash(this).removeClass("show");

        await setTimeout(() => {
          // Move dropdown element to body
          cash('[data-dropdown-replacer="' + randId + '"]').replaceWith(this);

          // Reset attribute
          cash(this).removeAttr("style");
          cash(this).removeAttr("data-popper-placement");

          // Set aria-expanded to false
          cash(dropdownToggle).attr("aria-expanded", false);
        }, 200);
      } else if (
        cash(this).attr("id") !== undefined &&
        !cash('[data-dropdown-replacer="' + cash(this).attr("id") + '"]')
          .length &&
        cash(this).hasClass("show") &&
        cash(this).data("dropdown-programmatically") === undefined
      ) {
        cash(this).remove();
      } else if (cash(this).data("dropdown-programmatically") == "initiate") {
        // Set programmatically attribute state
        cash(this).attr("data-dropdown-programmatically", "showed");
      } else if (cash(this).data("dropdown-programmatically") == "showed") {
        // Remove programmatically attribute state
        cash(this).removeAttr("data-dropdown-programmatically");
      }
    });
  }

  // Find visible dropdown toggle
  function findVisibleDropdownToggle(dropdownToggle) {
    return dropdownToggle.filter((key, dropdownToggle) => {
      return dropdownToggle.offsetParent !== null;
    });
  }

  // Show dropdown
  function show(dropdown) {
    let dropdownBox = cash(dropdown).find(".dropdown-menu").first();
    let dropdownToggle = findVisibleDropdownToggle(
      cash(dropdown).find(".dropdown-toggle")
    );
    let placement = cash(dropdown).data("placement")
      ? cash(dropdown).data("placement")
      : "bottom-end";
    let randId = "_" + Math.random().toString(36).substr(2, 9);

    // Hide dropdown
    hide();

    if (cash(dropdownBox).length) {
      // Set aria-expanded to true
      cash(dropdownToggle).attr("aria-expanded", true);

      // Set dropdown width
      cash(dropdown).css("position") == "static"
        ? cash(dropdown).css("position", "relative")
        : "";
      cash(dropdownBox).css("width", cash(dropdownBox).css("width"));

      // Move dropdown element to body
      cash('<div data-dropdown-replacer="' + randId + '"></div>').insertAfter(
        dropdownBox
      );
      cash(dropdownBox).attr("id", randId).appendTo("body");

      // Check if dropdown is used inside modal
      cash(".modal.show").each(function () {
        if (cash(this).find('[data-dropdown-replacer="' + randId + '"]')) {
          cash(dropdownBox).css("z-index", cash(this).css("z-index"));
        }
      });

      // Init popper
      Popper.createPopper(dropdownToggle[0], dropdownBox[0], {
        placement: placement,
      });

      // Show dropdown
      cash(dropdownBox).addClass("show");
    }
  }

  // Toggle dropdown programmatically
  function toggleProgrammatically(dropdown) {
    let dropdownBox = cash(dropdown).find(".dropdown-menu").first();
    if (cash(dropdownBox).length) {
      showProgrammatically(dropdown);
    } else {
      hide();
    }
  }

  // Show dropdown programmatically
  function showProgrammatically(dropdown) {
    if (cash(dropdown).find(".dropdown-menu").length) {
      cash(dropdown)
        .find(".dropdown-menu")
        .attr("data-dropdown-programmatically", "initiate");
    } else {
      let randId = cash("[data-dropdown-replacer]").data("dropdown-replacer");
      cash("#" + randId).attr("data-dropdown-programmatically", "initiate");
    }

    show(dropdown);
  }

  // Dropdown event listener
  cash("body").on("click", function (event) {
    let dropdown = cash(event.target).closest(".dropdown");
    let dropdownToggle = cash(dropdown).find(".dropdown-toggle");
    let dropdownBox = cash(dropdown).find(".dropdown-menu").first();
    let activeDropdownBox = cash(event.target)
      .closest(".dropdown-menu")
      .first();
    let dismissButton = cash(event.target).data("dismiss");

    if (
      (!cash(dropdown).length && !cash(activeDropdownBox).length) ||
      (cash(dropdownToggle).length && !cash(dropdownBox).length) ||
      dismissButton == "dropdown"
    ) {
      // Hide dropdown
      hide();
    } else if (!cash(activeDropdownBox).length) {
      // Show dropdown
      show(dropdown);
    }
  });

  // Keyboard event
  document.addEventListener("keydown", function (event) {
    if (event.code == "Escape") {
      hide();
    }
  });

  cash.fn.dropdown = function (event) {
    if (event == "show") {
      showProgrammatically(this);
    } else if (event == "hide") {
      hide(this);
    } else if (event == "toggle") {
      toggleProgrammatically(this);
    }
  };
})(cash);
