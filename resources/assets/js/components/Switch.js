import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Switch extends Component {
  constructor(props) {
    super(props)

    this.state = {
      checked: this.props.twitterFeedOpen
    }
  }

  toggleCheckboxState = () => {
    let isChecked = !this.state.checked;
    console.log(isChecked);
    this.setState({checked: isChecked});
    this.props.toggleTwitterFeed(isChecked);
  }

  render() {
    return (
      <label className="toggle-switch">
        <input type="checkbox" onChange={() => this.toggleCheckboxState()}/>
        <span className="toggle-switch-track round"></span>
      </label>
    )
  }

}

export default Switch;