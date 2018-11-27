import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Item extends Component {
  constructor(props) {
    super(props);
  }

  render() {
    let {item, onChange} = this.props;
    return (<li>
      <input type="checkbox" onChange={(e) => onChange(item.id, e.target.checked)} checked={item.checked} />
      {item.text}
    </li>);
  }
}

export default class Example extends Component {
  constructor(props) {
    super(props);
    this.state = {
      items: [],
      input: ''
    };
  }

  updateInput(event) {
    this.setState({input: event.target.value});
  }

  addItem(item) {
    let {items, input} = this.state;
    items.push({
      id: items.length + 1,
      text: input,
      checked: false
    });
    input = '';
    this.setState({items, input});
    if (items.length > 2) {
      throw new Error("aaaaaaaaaaahhhhh");
    }
  }

  onItemChange(id, checked) {
    let {items} = this.state;
    let item = items.filter((item) => item.id === id)[0];

    item.checked = checked;
    this.setState({items});
  }

  render() {
    let {items, input} = this.state;
    return (
      <div className="container">
        <h1 className="card-header">TODO Items</h1>
        <div className="card-body">
          <ul>
            {items.length == 0 && <li>All done!</li>}
            {items.map((item, i) => <Item key={item.id} item={item} onChange={this.onItemChange.bind(this)} />)}
          </ul>
          <input type="text" value={input} onChange={(e) => this.updateInput(e)} placeholder="Enter a new todo" />
          <button type="submit" onClick={() => this.addItem()}>Add</button>
        </div>
      </div>
    );
  }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
